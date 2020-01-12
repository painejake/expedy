@extends('layouts.app')

@section('content')

<div class="panel panel-default my-3 p-3 bg-white rounded box-shadow">

    <div class="panel-heading">
        <h3 class="panel-title border-bottom pb-4 mb-2">
            Create
        </h3>
    </div>

    <div class="panel-body">

        <form class="form-horizontal pt-3">
            <fieldset>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter route name">
                    <small id="routeName" class="form-text text-muted">This should be a unique and easily identifiable.</small>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control input-md" id="description" name="description" placeholder="A short description of the route"></textarea>
                </div>

                <div class="form-group">
                    <label for="gpx_file">GPX file</label>
                    <input id="gpx_file" name="gpx_file" class="form-control-file" aria-describedby="gpxFile" type="file" required>
                    <small id="routeName" class="form-text text-muted">Accepted files *.gpx, *.xml, *.tcx</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </fieldset>
        </form>

        <small class="d-block text-right mt-3">
                <a href="#">What's this for?</a>
            </small>
    </div>

</div>

@endsection
