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
                $table->string('member_id')->unique()->index()->nullable();
                $table->string('first_name')->index();
                $table->string('last_name')->index();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->integer('phone')->index();
                $table->string('address');
                $table->unsignedBigInteger('country_id')->index()->nullable();
                $table->unsignedBigInteger('state_id')->index()->nullable();
                $table->unsignedBigInteger('city_id')->index()->nullable();
                $table->integer('zipcode')->index();
                $table->unsignedBigInteger('points')->default(0);
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->timestamp('deleted_at')->nullable();
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
