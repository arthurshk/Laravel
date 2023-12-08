<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        $roles = Role::all();
        return view('client.client',['clients' => $clients],['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $roles = Role::all();
        return view('client.create' ,['roles' => $roles]);
    return view('client.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $data = request()->validate([
        //     'name' => 'required|string',
        //     'role_id' => 'required',
        // ]);
        // Client::create($data);
        // $clients = Client::all();

        // return view('client.client',['clients' => $clients]);
        $client = Client::create($request->all());
        return redirect('/client');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $client = Client::findOrFail($id);
            return view('client.show', compact('client'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $client = Client::findOrFail($id);
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $client = Client::findOrFail($id);
            $client->update($request->all());
            return redirect('/client');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('/client');
    }
}
