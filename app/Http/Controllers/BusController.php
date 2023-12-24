<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(Request $request){

        $buses = Bus::all();
        return view('bus.index', compact('buses'));
    }

    public function create()
    {
        return view('bus.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Bus::create($request->all());

        return redirect()->route('bus.index')->with('success', 'Bus created successfully');
    }

    public function edit(Bus $bus)
    {
        return view('bus.edit', compact('bus'));
    }

    public function update(Request $request, Bus $bus)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $bus->update($request->all());

        return redirect()->route('bus.index')->with('success', 'Bus updated successfully');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();

        return redirect()->route('bus.index')->with('success', 'Bus deleted successfully');
    }
}
