@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Payment</h2>
        <form method="POST" action="{{ url('/payment') }}">
            @csrf
            <div class="form-group">
                <label for="name">Payment Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection