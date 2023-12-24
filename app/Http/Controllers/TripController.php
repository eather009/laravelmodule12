<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trip.index', compact('trips'));
    }

    public function create()
    {
        $locations = Location::all();
        $buses = Bus::all();
        return view('trip.add', compact('locations', 'buses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trip_name' => 'required|string|max:255',
            'departure_location_id' => 'required|exists:locations,id',
            'arrival_location_id' => 'required|exists:locations,id',
            'bus_id' => 'required|exists:buses,id',
            'departure_date' => 'required|date|unique:trips,departure_date,NULL,id,bus_id,' . $request->bus_id,
        ]);

        Trip::create($request->all());

        return redirect()->route('trip.index')->with('success', 'Trip created successfully');
    }

    public function edit(Trip $trip)
    {
        $locations = Location::all();
        $buses = Bus::all();
        return view('trip.edit', compact('trip', 'locations', 'buses'));
    }

    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'trip_name' => 'required|string|max:255',
            'departure_location_id' => 'required|exists:locations,id',
            'arrival_location_id' => 'required|exists:locations,id',
            'bus_id' => 'required|exists:buses,id',
            'departure_date' => 'required|date|unique:trips,departure_date,' . $trip->id . ',id,bus_id,' . $request->bus_id,
        ]);

        $trip->update($request->all());

        return redirect()->route('trip.index')->with('success', 'Trip updated successfully');
    }
}
