<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index(Request $request){

        return view('SeatAllocation.index');
    }

    public function create(Request $request){

        return view('SeatAllocation.sell');
    }

    public function store(Request $request){

        return redirect()->route('ticket.sold')->with('success', 'Ticket sold successfully');
    }


}
