<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request){

        $locations = Location::all();
        return view('location.index', compact('locations'));
    }

    public function create()
    {
        return view('location.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Location::create($request->all());

        return redirect()->route('location.index')->with('success', 'Location created successfully');
    }

    public function edit(location $location)
    {
        return view('location.edit', compact('location'));
    }

    public function update(Request $request, location $location)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $location->update($request->all());

        return redirect()->route('location.index')->with('success', 'Location updated successfully');
    }

    public function destroy(location $location)
    {
        $location->delete();

        return redirect()->route('location.index')->with('success', 'Location deleted successfully');
    }
}
