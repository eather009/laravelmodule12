@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Trip</h3>
                        <div class="card-tools">
                            <a href="{{ route('trip.index') }}" class="btn btn-primary">List of Trip</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('trip.edit', $trip->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="trip_name">Trip Name</label>
                                <input type="text" class="form-control" id="trip_name" name="trip_name" value="{{$trip->trip_name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="departure_location_id">Departure Location</label>
                                <select class="form-control" id="departure_location_id" name="departure_location_id"
                                        required>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}"  {{ $trip->departure_location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="arrival_location_id">Arrival Location</label>
                                <select class="form-control" id="arrival_location_id" name="arrival_location_id"
                                        required>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}"  {{ $trip->arrival_location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bus_id">Bus</label>
                                <select class="form-control" id="bus_id" name="bus_id" required>
                                    @foreach($buses as $bus)
                                        <option value="{{ $bus->id }}"  {{ $trip->bus_id == $bus->id ? 'selected' : '' }}>{{ $bus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="departure_date">Departure Date</label>
                                <input type="date" class="form-control" id="departure_date" name="departure_date"  value="{{$trip->departure_date}}"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Trip</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
