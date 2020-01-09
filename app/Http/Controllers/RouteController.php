<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
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

    /**
     * Creates a new route assigned to a user and returns
     * the route data.
     *
     * @return \Illuminate\Http\Response
     * @since 1.0.0
     */
    public function createRoute()
    {
        $user = Auth::user();

        $title = $request->title;
        $desc = $request->description;
        $data = $request->data;

        $route = Route::create([
            'user_id' => $user->id,
            'title' => $title,
            'description' => $desc,
        ]);

        foreach ($data as $gpxFile) {
            $gpxPath = Storage::disk('uploads')
                ->put($user->id . '/gpx_upload/' . $route->id, $gpxFile);

            GpxRoute::create([
                'route_id' => $route->id,
                'gpx_data' => $user->id . '/gpx_upload/' . $route->id,
                'gpx_json' => $user->id . '/gpx_upload/' . $route->id
            ]);
        }

        return response()->json([
            'error' => false,
            'data' => $route
        ]);
    }
    
    public function gpxExample()
    {
        $gpx = new \phpGPX\phpGPX();
        $file = $gpx->load(base_path('resources/testing/test.gpx'));

        dd($file);
    }

}
