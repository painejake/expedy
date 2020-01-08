<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RouteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the routes listing screen.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('routes.index');
    }

    public function gpxExample()
    {
        $gpx = new \phpGPX\phpGPX();
        $file = $gpx->load(base_path('resources/testing/test.gpx'));

        dd($file);
    }

}
