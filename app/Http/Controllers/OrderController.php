<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.order',['orders' => $orders] );
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('order.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $order = Order::findOrFail($id);
            return view('order.show', compact('order'));
        
    
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $orders = Order::where('name', 'like', '%' . $searchQuery . '%')->get();
        return view('order.search_results', compact('searchQuery', 'orders'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $order = Order::findOrFail($id);
            $order->update($request->all());
            return redirect('/order');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/order');
    }
}
