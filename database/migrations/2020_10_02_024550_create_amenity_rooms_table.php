<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'amenity_rooms', 
            function (Blueprint $table) {
                $table->unsignedBigInteger('room_id')->index();
                $table->unsignedBigInteger('amenity_id')->index();

                $table->foreign('room_id')->references('id')->on('rooms');
                $table->foreign('amenity_id')->references('id')->on('amenities');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenity_rooms');
    }
}
