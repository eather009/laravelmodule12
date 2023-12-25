<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SeatAllocationController extends Controller
{
    public function index(Request $request, Trip $trip){

        if($trip->bus->total_seat - $trip->seatAllocations->sum('seat_number') === 0){
            return redirect()->route('ticket.search.trip')->with('error', 'Ticket not available');
        }
        return view('SeatAllocation.index', compact('trip'));
    }

    public function create(Request $request, Trip $trip){
        if($trip->bus->total_seat - $trip->seatAllocations->sum('seat_number') === 0){
            return redirect()->route('ticket.search.trip')->with('error', 'Ticket not available');
        }
        $users = User::all();
        return view('SeatAllocation.sell', compact('trip','users'));
    }

    public function store(Request $request, Trip $trip){
        if($trip->bus->total_seat - $trip->seatAllocations->sum('seat_number') === 0){
            return redirect()->route('ticket.search.trip')->with('error', 'Ticket not available');
        }
        try {
            $request->validate([
                'seat_number' => 'required|numeric|max:' . ($trip->bus->total_seat - $trip->seatAllocations->sum('seat_number')),
                'user_id' => 'required|exists:users,id',
                'trip_id' => 'required|exists:trips,id',
            ]);

            SeatAllocation::create($request->all());

        } catch (ValidationException $e) {

            $errors = $e->validator->errors();

            return redirect()->back()->withErrors($errors)->withInput();
        }

        return redirect()->route('ticket.sold', $trip->id)->with('success', 'Ticket sold successfully');
    }

}
