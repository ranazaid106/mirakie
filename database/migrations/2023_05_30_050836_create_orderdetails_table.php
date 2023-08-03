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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('customer_id');
            $table->bigInteger('user_id');
            
            $table->string('order_id');

            $table->string('select_country');
            $table->string('select_product');

            $table->string('mattress_size')->nullable();
            $table->string('select_mattress')->nullable();

            $table->string('ottoman_design')->nullable();
            $table->string('ottoman_color')->nullable();
            $table->string('ottoman_fabric')->nullable();

            $table->string('gaslift_size')->nullable();
            $table->string('gaslift_design')->nullable();

            $table->string('headboard_size')->nullable();
            $table->string('headboard_design')->nullable();
            $table->string('headboard_color')->nullable();
            $table->string('headboard_fabric')->nullable();


            $table->string('without_diamond_size')->nullable();
            $table->string('without_diamond_color')->nullable();
            $table->string('without_diamond_fabric')->nullable();
            $table->string('without_diamond_storage')->nullable();
            $table->string('without_diamond_base')->nullable();
            $table->string('without_diamond_mattress')->nullable();


            $table->string('with_diamond_size')->nullable();
            $table->string('with_diamond_design')->nullable();
            $table->string('with_diamond_color')->nullable();
            $table->string('with_diamond_fabric')->nullable();
            $table->string('with_diamond_button_diamond')->nullable();
            $table->string('with_diamond_storage')->nullable();
            $table->string('with_diamond_base')->nullable();
            $table->string('with_diamond_mattress')->nullable();


            $table->string('ottoman_divan_size')->nullable();
            $table->string('ottoman_divan_headboad')->nullable();
            $table->string('ottoman_divan_color')->nullable();
            $table->string('ottoman_divan_fabric')->nullable();
            $table->string('ottoman_divan_mattress')->nullable();


            $table->string('divan_size')->nullable();
            $table->string('divan_headboard')->nullable();
            $table->string('divan_color')->nullable();
            $table->string('divan_fabric')->nullable();
            $table->string('divan_storage')->nullable();
            $table->string('divan_mattress')->nullable();

            $table->string('monaco_divan_size')->nullable();
            $table->string('monaco_divan_headboard')->nullable();
            $table->string('monaco_divan_color')->nullable();
            $table->string('monaco_divan_fabric')->nullable();
            $table->string('monaco_divan_storage')->nullable();
            $table->string('monaco_divan_mattress')->nullable();

      

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
};
