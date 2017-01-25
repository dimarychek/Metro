<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = "dealer";
    protected $fillable = ['dealer_name', 'address', 'phone'];
}
