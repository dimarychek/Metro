<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metro extends Model
{
    protected $table = "metro_station";
    protected $fillable = ['metro_station_name', 'metro_station_coords'];
}
