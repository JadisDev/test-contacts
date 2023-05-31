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

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($contacts)
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact['name'] }} </td>
                                    <td>{{ $contact['contact'] }}</td>
                                    <td>{{ $contact['email'] }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-update="{{ $contact['id'] }}">
                                            Update
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-update="{{ $contact['id'] }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
