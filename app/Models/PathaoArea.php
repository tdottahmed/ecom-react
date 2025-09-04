<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathaoArea extends Model
{
    protected $fillable = ['id', 'zone_id', 'name'];
    public $incrementing = true;
}
