<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'reservations', 
            function (Blueprint $table) {
                $table->id();
                $table->integer('confirmation_number')->index();
                $table->string('guest_member_id')->index();
                $table->enum('status',['active', 'cancelled']);
                $table->unsignedBigInteger('hotel_id')->index();
                $table->unsignedBigInteger('room_id')->index();
                $table->unsignedTinyInteger('ocuppancy');
                $table->date('checkin_date')->index();
                $table->date('checkout_date')->index();
                $table->timestamps();
                $table->timestamp('deleted_at');

                $table->foreign('guest_member_id')->references('member_id')->on('users');
                $table->foreign('hotel_id')->references('id')->on('hotels');
                $table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('reservations');
    }
}
