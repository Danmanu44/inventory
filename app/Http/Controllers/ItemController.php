<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Store;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        return view('all_item', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::get();
        return view('item', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validation rules
        $rules = [
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ];

        // Custom validation messages
        $messages = [
            'product_id.required' => 'Please select a product.',
            'quantity.required' => 'Please enter the quantity.',
            'quantity.integer' => 'The quantity must be an integer.',
            'quantity.min' => 'The quantity must be at least 1.',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules, $messages);

        // Set the valid store_id you want to associate with the item
        $destinationStoreId = 1; // Change to the actual ID of the General Store

        // Check if the item with the same product and store already exists
        $existingItem = Item::where('product_id', $validatedData['product_id'])
        ->where('store_id', $destinationStoreId)
        ->first();

        $item = null;

        if ($existingItem) {
        // If the item exists, update the quantity
        $existingItem->quantity += $validatedData['quantity'];
        $existingItem->save();
        } else {
        // If the item doesn't exist, create a new item with the destination store
        $item = new Item([
            'product_id' => $validatedData['product_id'],
            'store_id' => $destinationStoreId,
            'quantity' => $validatedData['quantity'],
        ]);

        // Save the item to the database
        $item->save();
        }

        // Check if $item is defined before using it in the transaction creation code
        if ($item) {
        // Retrieve the current quantity in the destination store
        $destinationStore = Store::findOrFail($destinationStoreId);
        $currentQuantity = $destinationStore->items()->where('product_id', $validatedData['product_id'])->sum('quantity');

        // Calculate the new quantity by adding the incoming quantity
        $newQuantity = $currentQuantity + $item->quantity;

        // Update the destination store with the new quantity
        $destinationStore->items()->updateOrCreate(
            ['product_id' => $validatedData['product_id']],
            ['quantity' => $newQuantity]
        );

        // Create a transaction record
        $transaction = new Transaction([
            'from_store' => $destinationStoreId,
            'destination_store' => $destinationStoreId,
            'user_id' => auth()->user()->id,
            'acceptance_status' => null,
            'item_id' => $item->id,
        ]);

        $transaction->save();
        }

        return redirect()->route('add_item')->with('success_message', 'Item created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
