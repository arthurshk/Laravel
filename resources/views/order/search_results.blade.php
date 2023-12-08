@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search Results for "{{ $searchQuery }}"</div>

                <div class="card-body">
                    @if($orders->isEmpty())
                        <p>No matching orders found.</p>
                    @else
                        <ul>
                            @foreach($orders as $order)
                                <li>{{ $order->id }}</li>
                                <li>{{ $order->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
