@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Client') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('client.update', $client->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection