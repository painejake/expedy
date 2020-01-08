<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpeditionController extends Controller
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
     * Show the expedition listing screen.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('expeditions.index');
    }
    
}
