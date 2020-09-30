<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'users', 
            function (Blueprint $table) {
                $table->id();
                $table->string('member_id')->unique()->index();
                $table->string('first_name')->index();
                $table->string('last_name')->index();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->integer('phone')->index();
                $table->string('address');
                $table->unsignedBigInteger('country_id')->index();
                $table->unsignedBigInteger('state_id')->index();
                $table->unsignedBigInteger('city_id')->index();
                $table->integer('zipcode')->index();
                $table->unsignedBigInteger('points');
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->timestamp('deleted_at');
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
        Schema::dropIfExists('users');
    }
}
