<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('country.country',['countries' => $countries] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('country.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = Country::create($request->all());
        return redirect('/country');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $country = Country::findOrFail($id);
            return view('country.show', compact('country'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $country = Country::findOrFail($id);
            $country->update($request->all());
            return redirect('/country');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect('/country');
    }
}
