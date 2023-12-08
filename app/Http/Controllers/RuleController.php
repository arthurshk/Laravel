<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = Rule::all();
        return view('rule.rule',['rules' => $rules] );


    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('rule.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = Rule::create($request->all());
        return redirect('/rule');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $rule = Rule::findOrFail($id);
            return view('rule.show', compact('rule'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $rule = Rule::findOrFail($id);
        return view('rule.edit', compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $rule = Rule::findOrFail($id);
            $rule->update($request->all());
            return redirect('/rule');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rule = Rule::findOrFail($id);
        $rule->delete();
        return redirect('/rule');
    }
}
