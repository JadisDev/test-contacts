@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div class="col-md-12">
                <h3>Contact list</h3>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('error') }}
                    </div>
                @endif

                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($contacts)
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact['name'] }} </td>
                                    <td>{{ $contact['contact'] }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="/contact/{{ $contact['id'] }}"
                                            role="button">Update</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-update"
                                            data-update="{{ $contact['id'] }}">
                                            Delete
                                        </button>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/contact/detail/{{ $contact['id'] }}"
                                            role="button">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Detail</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
@stop
