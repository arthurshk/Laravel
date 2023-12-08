<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('status.status',['statuses' => $statuses] );

    }

         /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('status.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = Status::create($request->all());
        return redirect('/status');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $status = Status::findOrFail($id);
            return view('status.show', compact('status'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $status = Status::findOrFail($id);
            $status->update($request->all());
            return redirect('/status');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $status = Status::findOrFail($id);
        $status->delete();
        return redirect('/status');
    }
}
