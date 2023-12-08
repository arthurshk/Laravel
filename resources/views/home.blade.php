@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 style="color: red; font-size: 2em; text-align: center;">Postal Service</h1>

                    <div class="search-container">
                    
                    <form action="{{ route('order.search') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                    <input type="text" name="search" class="search-input" placeholder="Search Orders" required>
                    <button type="submit" class="search-button">Find</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
       body {
    height: 100vh;
    margin: 0;
    background-image: linear-gradient(to bottom, #FF2D00, #376B34); 
    color: white;
}
    .search-container {
        text-align: center;
        margin-top: 20px;
    }
    .search-input {
        width: 300px;
        padding: 8px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        margin-bottom: 10px;
    }
    .search-input:focus {
        outline: none;
    }
    .card-header{
        background: black;
    }
    .search-button {
        padding: 8px 16px;
        border-radius: 5px;
        border: none;
        background-color: white;
        color: red;
        font-size: 16px;
        cursor: pointer;
    }
    .search-button:hover {
        background-color: #f2f2f2;
    }
    h1 {
        color: red;
        font-size: 2em;
        text-align: center;
    }
</style>
@endsection