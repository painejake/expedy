<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['title', 'description', 'region', 'country', 'distance'];
}
