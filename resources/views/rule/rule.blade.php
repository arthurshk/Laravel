<h1>Rules</h1>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rules') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary mb-2" href="{{ route('rule.create') }}">Add New Rule</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rules as $rule)
                                <tr>
                                    <td>{{ $rule->id }}</td>
                                    <td>{{ $rule->name }}</td>
                                    <td>
                                        <a href="{{ url('/rule/'.$rule->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('/rule/'.$rule->id) }}" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection