<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class MetroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = DB::table('metro_dealer')
            ->leftJoin('metro_station', 'metro_dealer.metro_station_id', '=', 'metro_station.id')
            ->select(DB::raw('count(dealer_id) as count_dealer, metro_station_id, metro_station_name, metro_station_coords'))
            ->groupBy('metro_station_id', 'metro_station_name', 'metro_station_coords')
            ->get();

        return view('metro.index', ['stations' => $stations]);
    }
}
