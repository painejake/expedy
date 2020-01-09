@extends('layouts.app')

@section('content')

    <div class="panel panel-default my-3 p-3 bg-white rounded box-shadow">

        <div class="panel-heading">
            <h3 class="panel-title border-bottom pb-4 mb-2">
                Routes
            </h3>
        </div>

        <div class="panel-body">
            
                <!-- Display the routes -->
                <all-routes></all-routes>
                <!-- End Display -->

            <small class="d-block text-right mt-3">
                <a href="#">What's this for?</a>
            </small>
        </div>

    </div>

@endsection
