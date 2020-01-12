<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\GpxRoute;
use Storage;
use Auth;

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

    /**
     * Show the route create screen.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('routes.create');
    }

    /**
     * Creates a new route assigned to a user and returns
     * the route data.
     *
     * @return \Illuminate\Http\Response
     * @since 1.0.0
     */
    public function store(Request $request)
    {
        // Create the base route
        $route = Route::create([
            'user_id' => $request->user()->id,
            'title' =>  $request->title,
            'description' => $request->description,
            'region' => '',
            'country' => '',
            'distance' => 0
        ]);

        // Upload the file
        $gpx_path = $request->file('gpx_file')->store('uploads/routes/'. $request->user()->id);

        // Parse the GPX file and store it as JSON
        $gpx = new \phpGPX\phpGPX();
        $gpx_data = $gpx->load(storage_path('app/' . $gpx_path));

        if (isset($gpx_data->tracks[0]->stats)) {
            Route::where('id', $route->id)->update([
                'distance' => $gpx_data->tracks[0]->stats->distance
            ]);
        }

        // Then create the GpxRoute
        GpxRoute::create([
            'route_id' => $route->id,
            'gpx_file' => $gpx_path,
            'gpx_json' => json_encode($gpx_data)
        ]);

        return redirect('/routes');
    }

    public function edit($id)
    {
        $route = Route::find($id);

        return view('routes.edit', compact('route'));
    }

    /**
     * Fetch all the routes associated with a user and
     * return the json result.
     *
     * @return \Illuminate\Http\Response
     * @since 1.0.0
     */
    public function getAllRoutes()
    {
        $routes = Route::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get(['title', 'region', 'country', 'distance']);

        return response()->json([
            'error' => false,
            'data' => $routes
        ]);
    }
    
    public function gpxExample()
    {
        $gpx = new \phpGPX\phpGPX();
        $file = $gpx->load(base_path('resources/testing/test.gpx'));

        dd($file);
    }

}
