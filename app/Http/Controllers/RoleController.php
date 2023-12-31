<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.role',['roles' => $roles] );
    }
      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('role.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return redirect('/role');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $role = Role::findOrFail($id);
            return view('role.show', compact('role'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $role = Role::findOrFail($id);
            $role->update($request->all());
            return redirect('/role');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect('/role');
    }
}
