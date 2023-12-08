@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Payment') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('payment.update', $payment->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $payment->name }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection