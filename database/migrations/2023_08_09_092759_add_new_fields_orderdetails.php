<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            $table->string('Mattress')->nullable();
            $table->string('Ottoman')->nullable();
            $table->string('Bed')->nullable();
            $table->string('Gaslift')->nullable();
            $table->string('Headboard')->nullable();
            $table->string('Design')->nullable();
            $table->string('Without_diamond_button')->nullable();
            $table->string('With_diamond_button')->nullable();
            $table->string('Divan')->nullable();
            $table->string('Ottoman_divan')->nullable();
            $table->string('Divan_form')->nullable();
            $table->string('Manaco_divan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            //
        });
    }
};
