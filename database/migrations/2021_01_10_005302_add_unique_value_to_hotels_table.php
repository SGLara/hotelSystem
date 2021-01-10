<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueValueToHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'hotels',
            function (Blueprint $table) {
                $table->integer('phone')->unique()->change();
                $table->integer('fax')->unique()->change();
                $table->string('address')->unique()->change();
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
        Schema::table(
            'hotels',
            function (Blueprint $table) {
                $table->integer('phone')->change();
                $table->integer('fax')->change();
                $table->string('address')->change();
            }
        );
    }
}
