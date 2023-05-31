@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div class="col-md-6">
                <div class="container">
                    <h1>Detail Contact</h1>
                    <h2>{{ $contact['name'] }}</h2>
                    <p>Contact: {{ $contact['contact'] }}</p>
                    <p>Email: {{ $contact['email'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <a class="btn btn-warning" href="/contact/{{ $contact['id'] }}" role="button">Update</a>
                <button type="button" class="btn btn-danger btn-delete" data-update="{{ $contact['id'] }}">
                    Delete
                </button>
            </div>
        </div>
    </div>
@stop
