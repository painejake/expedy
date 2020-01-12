<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GpxRoute extends Model
{
    protected $fillable = ['route_id', 'gpx_file', 'gpx_json'];

    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}
