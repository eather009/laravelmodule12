@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('trip.add') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="trip_name">Trip Name</label>
                                <input type="text" class="form-control" id="trip_name" name="trip_name" required>
                            </div>
                            <div class="form-group">
                                <label for="departure_location_id">Departure Location</label>
                                <select class="form-control" id="departure_location_id" name="departure_location_id"
                                        required>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="arrival_location_id">Arrival Location</label>
                                <select class="form-control" id="arrival_location_id" name="arrival_location_id"
                                        required>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bus_id">Bus</label>
                                <select class="form-control" id="bus_id" name="bus_id" required>
                                    @foreach($buses as $bus)
                                        <option value="{{ $bus->id }}">{{ $bus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="departure_date">Departure Date</label>
                                <input type="date" class="form-control" id="departure_date" name="departure_date"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Trip</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
