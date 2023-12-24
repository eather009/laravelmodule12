<?php

namespace App\Http\Controllers;

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
        $totalTrips = 0;
        $todaySell = 0;
        $monthSell = 0;
        $uniqueVisitors = 0;
        return view('home', compact('totalTrips', 'todaySell', 'monthSell', 'uniqueVisitors'));
    }
}
