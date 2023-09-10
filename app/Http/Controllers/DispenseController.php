<?php

namespace App\Http\Controllers;

use App\Models\Dispense;
use App\Http\Requests\StoreDispenseRequest;
use App\Http\Requests\UpdateDispenseRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Client;
use App\Models\Item;

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

        $dispenses = Dispense::where('client_id',$client_id)->get();
        $client = Client::find( $client_id);

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

        // Retrieve the selected product quantity from items table
        $product = product::find($request->input('product_id'));


        // Check if the product exists
        if (!$product) {
            return redirect()->route('add_dispense')->with('error_message', 'Selected product not found');
        }

        // Check if the requested quantity is available
        if ($request->input('quantity') > $product->quantity) {
            return redirect()->route('add_dispense')->with('error_message', 'Insufficient quantity for the selected product');
        } else {
            // Reduce the product quantity by the requested amount
            $product->quantity -= $request->input('quantity');
            $product->update();


                    // Retrieve the clients based on client_id
        $client = Client::find($request->input('beneficiary_id'));


        if (!$client) {
            return redirect()->route('add_dispense')->with('error_message', 'Beneficiary not found');
        }

        // Create a new dispense record
        Dispense::create([
            'client_id' => $client->id,
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
        ]);
        $products = Product::get();
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
        $dispense= Dispense::findOrFail($id);
        // dd($dispense);
        $client_id= $dispense->client_id;

        $dispense->product->quantity+= $dispense->quantity;
        $dispense->product->update();


        $dispense->delete();
        return redirect()->route('dispense.reload',['client_id'=>$client_id])->with('success_message', 'Dispense record deleted successfully');

    }
}
