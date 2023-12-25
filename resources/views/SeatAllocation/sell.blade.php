@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Search Ticket</h3>
                        <div class="card-tools">
                            <a href="{{ route('ticket.search.trip') }}" class="btn btn-primary">Search for Trip</a>
                            <a href="{{ route('ticket.sold',$trip->id) }}" class="btn btn-primary">Sold Tickets</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ticket.search.trip') }}" method="GET" class="form form-inline">
                            <div class="mr-1 form-group">
                                <label for="departure_location_id">Departure From: </label>
                                <select class="form-control" id="departure_location_id" name="departure_location_id"
                                >
                                    <option value="{{$trip->departure_location_id}}">{{$trip->departureLocation->name}}</option>
                                </select>
                            </div>
                            <div class="mr-1 form-group">
                                <label for="departure_to">Arrival At: </label>
                                <select class="form-control" id="arrival_location_id" name="arrival_location_id"
                                >
                                    <option value="{{$trip->arrival_location_id}}">{{$trip->arrivalLocation->name}}</option>
                                </select>
                            </div>
                            <div class="mr-1 form-group">
                                <label for="departure_date">Departure Date: </label>
                                <input type="date" class="form-control" id="departure_date" name="departure_date" value="{{$trip->departure_date}}"
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">Check Availability</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sell Ticket</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ticket.sell', $trip->id) }}" method="POST" class="form">
                            @csrf
                            <input type="hidden" name="trip_id" value="{{$trip->id}}">
                            <div class="mr-1 form-group">
                                <label for="user_id">Customer: </label>
                                <select class="form-control" id="user_id" name="user_id"
                                required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" @if(request('user_id') == $user->id) selected="selected" @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mr-1 form-group">
                                <label for="departure_date">Number of Tickets: </label>
                                <input  type="number" max="{{$trip->bus->total_seat - $trip->seatAllocations->sum('seat_number')}}" min="1" class="form-control" id="seat_number" name="seat_number" value="1"
                                        required>
                            </div>
                            <button type="submit" class="btn btn-primary">Sell</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
