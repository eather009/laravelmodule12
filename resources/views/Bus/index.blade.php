@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Buses</h3>
                        <div class="card-tools">
                            <a href="{{ route('bus.add') }}" class="btn btn-primary">Add New Bus</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Plate Number</th>
                                <th>Total Seats</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($buses as $bus)
                                <tr>
                                    <td>{{ $bus->id }}</td>
                                    <td>{{ $bus->name }}</td>
                                    <td>{{ $bus->model }}</td>
                                    <td>{{ $bus->plate_number }}</td>
                                    <td>{{ $bus->total_seat }}</td>
                                    <td>
                                        <a href="{{ route('bus.edit', $bus->id) }}" class="btn btn-warning">Edit</a>
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
