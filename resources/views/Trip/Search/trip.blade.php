@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Search for Trip</h3>
                    <div class="card-tools">
                        <a href="{{ route('trip.index') }}" class="btn btn-primary">List of Trip</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('ticket.search.trip') }}" method="GET" class="form form-inline">
                        <div class="mr-1 form-group">
                            <label for="departure_location_id">Departure Location: </label>
                            <select class="form-control" id="departure_location_id" name="departure_location_id"
                                    >
                                <option value="">--</option>
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}" @if(request('departure_location_id') == $location->id) selected="selected" @endif>{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mr-1 form-group">
                            <label for="arrival_location_id">Arrival Location: </label>
                            <select class="form-control" id="arrival_location_id" name="arrival_location_id"
                                    >
                                <option value="">--</option>
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}" @if(request('arrival_location_id') == $location->id) selected="selected" @endif>{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mr-1 form-group">
                            <label for="departure_date">Departure Date: </label>
                            <input type="date" class="form-control" id="departure_date" name="departure_date" value="{{request('departure_date')}}"
                                   >
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Check Available Tickets</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Trip Name</th>
                            <th>Departure Location</th>
                            <th>Arrival Location</th>
                            <th>Bus</th>
                            <th>Departure Date</th>
                            <th>Available Seat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trips as $trip)
                            <tr>
                                <td>{{ $trip->trip_name }}</td>
                                <td>{{ $trip->departureLocation->name }}</td>
                                <td>{{ $trip->arrivalLocation->name }}</td>
                                <td>{{ $trip->bus->name }}</td>
                                <td>{{ $trip->departure_date }}</td>
                                <td>{{ $trip->bus->total_seat - $trip->seatAllocations->sum('seat_number') }}</td>
                                <td>
                                    @if($trip->bus->total_seat - $trip->seatAllocations->sum('seat_number')  > 0)
                                    <a href="{{ route('ticket.sell', $trip->id) }}" class="btn btn-warning">Sell</a>
                                    @endif
                                        <a href="{{ route('ticket.sold', $trip->id) }}" class="btn btn-primary">Sold</a>
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
