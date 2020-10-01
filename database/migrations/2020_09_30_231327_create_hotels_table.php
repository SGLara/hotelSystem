<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'hotels',
            function (Blueprint $table) {
                $table->id();
                $table->string('name')->index();
                $table->string('email')->unique();
                $table->integer('phone');
                $table->integer('fax');
                $table->string('address');
                $table->unsignedBigInteger('country_id')->index();
                $table->unsignedBigInteger('state_id')->index();
                $table->unsignedBigInteger('city_id')->index();
                $table->string('logo_url');
                $table->timestamps();
                $table->timestamp('deleted_at');

                $table->foreign('country_id')->references('id')->on('countries');
                $table->foreign('state_id')->references('id')->on('states');
                $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('hotels');
    }
}
