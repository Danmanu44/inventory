<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $stores = Store::get();
        
        return view('all_store', compact('stores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
        ]);
    
        // Check if there are any existing stores
        $storeCount = Store::count();
    
        if ($storeCount == 0) {
            // Create a new store record with default values
            Store::create([
                'name' => 'GENERAL STORE',
                'address' => 'FEDERAL GOVERNMENT',
            ]);
        }
    
        // Create a new store record in the database
        Store::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
        ]);
    
        return redirect()->route('all_store')->with('success_message', 'Store created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
