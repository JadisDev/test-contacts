@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('error') }}
                    </div>
                @endif
                <h3>{{ $title }}</h3>
                @if ( $contact['id'] === '')
                    <form method="post" action="{{ route('contact.store') }}">
                @else
                    <form method="post" action="{{ route('contact.store') }}">
                    @method('patch')
                @endif
                @csrf
                <input hidden type="text" id="id" class="form-control" name="id"
                    value="{{ $contact['id'] }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $contact['name'] }}" required">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" id="contact" class="form-control" name="contact" value="{{ $contact['contact'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ $contact['email'] }}" required>
                </div>
                <button type="submit" class="btn btn-primary">{{ $title }}</button>
                </form>
            </div>
        </div>
    </div>
@stop
