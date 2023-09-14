<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients= Client::all();
        return view('all_clients',compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'custom_id' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'no_of_dependent' => 'required|min:1',
            'LGA' => 'required',
            'ward' => 'required',
            'poll_unit' => 'required',
            'address' => 'required',
        ]);

        // Create a new beneficiary record
        try {
            Client::create($validatedData);
        } catch (Throwable $th) {
            // Log the exception
            logger()->error($th);
            // Return an error message
            return response()->json(['message' => 'Error creating client'], 400);
        }

        // Redirect back with a success message
        return redirect()->route('client.index')->with('success_message', 'Beneficiary added successfully');
    }




    

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
