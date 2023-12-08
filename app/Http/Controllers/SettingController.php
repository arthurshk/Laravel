<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::all();
        return view('settings.settings',['settings' => $settings] );

    }

         /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('settings.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = Settings::create($request->all());
        return redirect('/setting');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        {
            $setting = Settings::findOrFail($id);
            return view('settings.show', compact('setting'));
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $setting = Settings::findOrFail($id);
        return view('settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        {
            $setting = Settings::findOrFail($id);
            $setting->update($request->all());
            return redirect('/setting');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $setting = Settings::findOrFail($id);
        $setting->delete();
        return redirect('/setting');
    }
}
