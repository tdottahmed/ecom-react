<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathaoLocationMap extends Model
{
    protected $fillable = [
        'state_id',
        'city_id',
        'area_text',
        'pathao_city_id',
        'pathao_zone_id',
        'pathao_area_id',
        'is_default',
    ];
}
