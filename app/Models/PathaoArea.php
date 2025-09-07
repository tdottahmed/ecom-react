<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathaoArea extends Model
{
    protected $fillable = ['id', 'area_id', 'zone_id', 'area_name', 'home_delivery_available', 'pickup_available'];
    public $incrementing = true;
}
