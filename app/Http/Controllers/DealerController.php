<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = DB::table('metro_dealer')
            ->leftJoin('dealer', 'metro_dealer.dealer_id', '=', 'dealer.id')
            ->select(DB::raw('count(metro_station_id) as count_station, dealer_id, dealer_name, address, phone'))
            ->groupBy('dealer_id', 'dealer_name', 'address', 'phone')
            ->where('dealer_name', '!=', NULL)
            ->get();

        return view('dealer.index', ['dealers' => $dealers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealers = DB::table('metro_dealer')
            ->where('metro_station_id', $id)
            ->leftJoin('dealer', 'metro_dealer.dealer_id', '=', 'dealer.id')
            ->leftJoin('metro_station', 'metro_dealer.metro_station_id', '=', 'metro_station.id')
            ->get();

        return view('dealer.single', ['dealers' => $dealers]);
    }
}
