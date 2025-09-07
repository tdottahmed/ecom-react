<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathaoZone extends Model
{
    protected $fillable = ['id', 'city_id', 'zone_id', 'name'];
    public $incrementing = true;
}
