<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalTrips = Trip::all()->count();
        $todaySell = SeatAllocation::whereDate('created_at', Carbon::today()->toDateString())->sum('seat_number');
        $monthSell = SeatAllocation::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->sum('seat_number');
        $uniqueVisitors = SeatAllocation::all()->groupBy('user_id')->count();
        return view('home', compact('totalTrips', 'todaySell', 'monthSell', 'uniqueVisitors'));
    }
}
