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
            $table->string('with_diamond_button_sizes')->nullable();
            $table->string('with_diamond_button_design')->nullable();
            $table->string('with_diamond_button_color')->nullable();
            $table->string('with_diamond_button_fabric')->nullable();
            $table->string('with_diamond_button_button')->nullable();
            $table->string('with_diamond_button_storage')->nullable();
            $table->string('with_diamond_button_base')->nullable();
            $table->string('with_diamond_button_mattress')->nullable();
            $table->string('without_diamond_button_sizes')->nullable();
            $table->string('without_diamond_button_design')->nullable();
            $table->string('without_diamond_button_color')->nullable();
            $table->string('without_diamond_button_fabric')->nullable();
            $table->string('without_diamond_button_button')->nullable();
            $table->string('without_diamond_button_storage')->nullable();
            $table->string('without_diamond_button_base')->nullable();
            $table->string('without_diamond_button_mattress')->nullable();




            
            
            
            
            
            
            
            
            
            
            
            
            
            
             
            




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
