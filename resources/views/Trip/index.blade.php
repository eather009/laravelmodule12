@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Trips</h3>
                        <div class="card-tools">
                            <a href="{{ route('trip.add') }}" class="btn btn-primary">Add New Trip</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trip Name</th>
                                <th>Departure Location</th>
                                <th>Arrival Location</th>
                                <th>Bus</th>
                                <th>Departure Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trips as $trip)
                                <tr>
                                    <td>{{ $trip->id }}</td>
                                    <td>{{ $trip->trip_name }}</td>
                                    <td>{{ $trip->departureLocation->name }}</td>
                                    <td>{{ $trip->arrivalLocation->name }}</td>
                                    <td>{{ $trip->bus->name }}</td>
                                    <td>{{ $trip->departure_date }}</td>
                                    <td>
                                        <a href="{{ route('trip.edit', $trip->id) }}" class="btn btn-warning">Edit</a>
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
