<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|string',
            'client_address' => 'required|string',
            'client_contact_no' =>'required|string',
            'client_kind_attd' => 'required|string',
            'client_gstin_no' =>'required|string',
        ]);
    
        $invoice = Client::create($request->all());
    
        return response()->json([
            'message' => 'Client created successfully',
            'invoice' => $invoice,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|string',
            'client_address' => 'required|string',
            'client_contact_no' =>'required|string',
            'client_kind_attd' => 'required|string',
            'client_gstin_no' =>'required|string',
        ]);
    
        $client->update($request->all());

        return response()->json([
            'message' => 'Client updated successfully',
            'invoice' => $client,
        ]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
    $client->delete();

    return response()->json([
        'message' => 'Client deleted successfully'
    ], 200);

    }
}
