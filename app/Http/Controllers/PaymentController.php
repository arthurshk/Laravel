<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$payments = Payment::all();
        return view('payment.payment',['payments' => $payments] );

    }

         /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('payment.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
            $payment = Payment::findOrFail($id);
            return view('payment.show', compact('payment'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $payment = Payment::findOrFail($id);
        return view('payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $payment = Payment::findOrFail($id);
            $payment->update($request->all());
            return redirect('/payment');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect('/payment');
    }
}
