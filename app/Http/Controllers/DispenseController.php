<?php

namespace App\Http\Controllers;

use App\Models\Dispense;
use App\Http\Requests\StoreDispenseRequest;
use App\Http\Requests\UpdateDispenseRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Client;
use App\Models\Item;
use App\Models\StoreItems;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DispenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         return view('dispense_client_verify');


    }
    public function reload($client_id)
    {
        $products = Product::get();
        // dd($client_id);

        $dispenses = Dispense::where('client_id',$client_id)->get();
        $client = Client::find( $client_id);
        // dd($dispenses);

        return view('dispense', compact('products', 'dispenses', 'client'));
        // return view('dispense', compact('products'));


    }
    public function verify(Request $request){
        $request->validate([
            'beneficiary_id'=>'required|custom_id_exists_in_clients'
        ]);
        $client = Client::where('custom_id', $request->beneficiary_id)->first();

        $products = Product::get();

        $dispenses = Dispense::where('client_id',$client->id)->get();

        return view('dispense', compact('products', 'dispenses', 'client'));





    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'beneficiary_id' => 'required|exists_in_clients', // Use the custom rule here
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'description' => 'nullable',
        ]);



        // Retrieve the selected product quantity from storeItems table
        $store_product = StoreItems::all()->where('product_id',$request->input('product_id'))->where('store_id',auth()->user()->store_id)->first();

        // Check if the product exists
        if (!$store_product) {
            return redirect()->route('add_dispense')->with('error_message', 'Selected product not found');
        }

        // Check if the requested quantity is available
        if ($request->input('quantity') > $store_product->quantity) {
            return redirect()->route('add_dispense')->with('error_message', 'Insufficient quantity for the selected product');
        } else {
            // Reduce the product quantity by the requested amount
            $store_product->quantity -= $request->input('quantity');



                    // Retrieve the clients based on client_id
        $client = Client::find($request->input('beneficiary_id'));


        if (!$client) {
            return redirect()->route('add_dispense')->with('error_message', 'Beneficiary not found');
        }

       try {
            // Create a new dispense record
            Dispense::create([
                'client_id' => $client->id,
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity'),
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id,
                'store_id' => auth()->user()->store_id,
            ]);

            $store_product->update();
       } catch (\Throwable $e) {
        //throw $th;
        return redirect()->route('dispense.reload',['client_id'=>$client->id])->with('error_message', 'Dispense error : '.$e->getMessage());


       }


        // $products = Product::get();
        $dispenses = Dispense::all()->where('client_id', $client->id);
        return redirect()->route('dispense.reload',['client_id'=>$client->id])->with('success_message', 'Dispense record created successfully');




        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Dispense $dispense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispense $dispense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDispenseRequest $request, Dispense $dispense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
           DB::beginTransaction();
            $dispense= Dispense::findOrFail($id);
        // dd($dispense);
        $client_id= $dispense->client_id;
        $store_item=  StoreItems::where('store_id',$dispense->store_id)->first();

        $store_item->quantity+= $dispense->quantity;
        $store_item->update();


        $dispense->delete();
        DB::commit();
        return redirect()->route('dispense.reload',['client_id'=>$client_id])->with('success_message', 'Dispense record deleted successfully');



        } catch (\Throwable $e) {
            //throw $th;
            return redirect()->route('dispense.reload',['client_id'=>$client_id])->with('error_message', 'Error : '.$e.getMessage());

        }
    }
}
