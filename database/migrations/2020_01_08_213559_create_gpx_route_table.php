<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpxRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpx_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('route_id')->unsigned();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->text('gpx_file');
            $table->json('gpx_json');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpx_routes');
    }
}
