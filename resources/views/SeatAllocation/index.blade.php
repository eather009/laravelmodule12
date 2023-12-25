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
                            <a href="{{ route('ticket.sell',$trip->id) }}" class="btn btn-primary">Sell Tickets</a>
                        </div>
                    </div>
                    <div class="card-body">
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
                                <input readonly type="date" class="form-control" id="departure_date" name="departure_date" value="{{$trip->departure_date}}"
                                >
                            </div>
                        <div class="mr-1 form-group">
                            <label for="departure_date">Bus: </label>
                            <input readonly type="text" class="form-control" id="bus_id" name="bus_id" value="{{$trip->bus->name}}"
                            >
                        </div>
                        <div class="mr-1 form-group">
                            <label for="departure_date">Ticket Available: </label>
                            <input readonly type="number" class="form-control" id="bus_id" name="bus_id" value="{{$trip->bus->total_seat - $trip->seatAllocations->sum('seat_number')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sold Tickets</h3>
                    </div>
                    <div class="card-body">
                        @if($trip->seatAllocations)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Total Tickets</th>
                                </tr>
                                </thead>
                            <tbody>
                            @foreach($trip->seatAllocations as $seatAllocation)
                                <tr><th>{{$seatAllocation->user->name}}</th><td>{{$seatAllocation->seat_number}}</td></tr>
                            @endforeach
                            </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
