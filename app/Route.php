<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'region', 'country', 'distance'];
}
