@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Department</h2>
        <form method="POST" action="{{ url('/department') }}">
            @csrf
            <div class="form-group">
                <label for="name">Department Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection