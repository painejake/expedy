@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded box-shadow">
    <div class="lh-100">
        <h6 class="mb-1 text-white lh-100">Welcome back, {{ Auth::user()->name }}</h6>
        <small>It's been 47 day's since your last entry.</small>
    </div>

    <a href="#">
        <img class="rounded-circle float-right border border-white" src="https://picsum.photos/100" alt="" width="52" height="52">
    </a>

</div>

<div class="panel panel-default my-3 p-3 bg-white rounded box-shadow">

    <div class="panel-heading">
        <h3 class="panel-title border-bottom pb-4 mb-2">
        Overview
        <div class="btn-toolbar mb-2 mb-md-0 float-right">
            <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-primary">Share</button>
            <button class="btn btn-sm btn-outline-primary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-primary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
            </button>
        </div>
        </h3>
    </div>

    <div class="panel-body">
        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        <small class="d-block mt-3 text-secondary">
        <p>Statistics generated in-real time, last entry 25/12/2019.</p>
        </small>

        <small class="d-block text-right mt-3">
        <a href="#">All updates</a>
        </small>
    </div>

</div>

<div class="panel panel-default my-3 p-3 bg-white rounded box-shadow">
    <div class="panel-heading">
        <h3 class="panel-title border-bottom pb-4 mb-2">
        Latest Routes
        </h3>
    </div>
    <div class="panel-body">
        
        <div class="app-table">
        <table id="latest-expeditions" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Distance</th>
                    <th>Completed</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Walking Route 1</td>
                    <td>Cairngorms, Scotland</td>
                    <td>13.4km</td>
                    <td>23/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 2</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 3</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 4</td>
                    <td>Brecon Becons, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 5</td>
                    <td>Peak District, England</td>
                    <td>4.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 1</td>
                    <td>Cairngorms, Scotland</td>
                    <td>13.4km</td>
                    <td>23/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 2</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 3</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 4</td>
                    <td>Brecon Becons, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 5</td>
                    <td>Peak District, England</td>
                    <td>4.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 1</td>
                    <td>Cairngorms, Scotland</td>
                    <td>13.4km</td>
                    <td>23/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 2</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 3</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 4</td>
                    <td>Brecon Becons, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 5</td>
                    <td>Peak District, England</td>
                    <td>4.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 1</td>
                    <td>Cairngorms, Scotland</td>
                    <td>13.4km</td>
                    <td>23/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 2</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 3</td>
                    <td>Snowdonia, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 4</td>
                    <td>Brecon Becons, Wales</td>
                    <td>24.4km</td>
                    <td>17/12/2019</td>
                </tr>
                <tr>
                    <td>Walking Route 5</td>
                    <td>Peak District, England</td>
                    <td>4.4km</td>
                    <td>17/12/2019</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Distance</th>
                    <th>Completed</th>
                </tr>
            </tfoot>
        </table>
        </div>

        <small class="d-block text-right mt-3">
        <a href="#">View All</a>
        </small>
    </div>
</div>


@endsection
