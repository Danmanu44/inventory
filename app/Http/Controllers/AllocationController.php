<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use App\Models\Allocation;
use App\Models\StoreItems;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class AllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve allocations and store items from the database
        $allocations = Allocation::get();
        $storeItems = StoreItems::get();

        return view('all_allocation', compact('allocations', 'storeItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::get();
        $products = Product::get();

        return view('allocation', compact('stores', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */



public function accept($store_items_id){

    try {
        //get store item using Id
        $storeItem= StoreItem::find($store_items_id);

        // update accepted_by column with current user id



    } catch (\Throwable $th) {
        //throw $th;
    }




}

public function store(Request $request)
{
    $request->validate([
        'store_id' => 'required|exists:stores,id',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    try {
         DB::beginTransaction(); // Start a database transaction

        $fromStore = Store::findOrFail($request->input('store_id'));
        $product = Product::findOrFail($request->input('product_id'));

        // Check if the product quantity is sufficient in the 'fromStore'
        if ($product->quantity >= $request->input('quantity')) {
            // Subtract quantity from the product table in the 'fromStore'
            $product->quantity -= $request->input('quantity');
            $product->save();

            // Create or update a store item record for the 'fromStore'
            StoreItems::updateOrCreate(
                [
                    'store_id' => $fromStore->id,
                    'product_id' => $product->id,
                ],
                [
                    'quantity' => \DB::raw("quantity + {$request->input('quantity')}"), // Add quantity

                ]
            );

            // Create an allocation record for the 'fromStore'
           $allocation= Allocation::create([
                'store_id' => $fromStore->id,
                'product_id' => $product->id,
                'quantity' => $request->input('quantity'), // allocated quantity
            ]);

            // Create a transaction record with the default 'destination_store' (General Store)
            Transaction::create([
                'from_store' => $fromStore->id,
                'destination_store' => 1, // Default ID for General Store
                'user_id' => auth()->id(), // Assuming you have authentication in place
                'acceptance_status' => null,
                'allocation_id' => $allocation->id, // Assuming 'allocation_id' represents the product being transferred
            ]);

            DB::commit(); // Commit the transaction

            return redirect()->route('allocation.create')->with('success_message', 'Allocation and transfer successful.');
        } else {
            return redirect()->route('allocation.create')->with('error_message', 'Insufficient product quantity.');
        }
    } catch (\Exception $e) {
        DB::rollBack(); // Rollback the transaction in case of an exception
        // Handle exceptions and display an error message
         return redirect()->route('allocation.create')->with('error_message', $e->getMessage());
        // $stores= Store::all();
        // $products= Product::all();
        // return view('allocation' ,compact('stores','products'));
    }
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allocation $allocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Allocation $allocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allocation $allocation)
    {
        //
    }
}
