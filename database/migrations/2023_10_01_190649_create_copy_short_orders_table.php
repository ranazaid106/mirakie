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
        Schema::create('copy_short_orders', function (Blueprint $table) {
            $table->id();
            $table->string('short_orders_id')->nullable();
            $table->string('short_country')->nullable();
            $table->string('short_product')->nullable();
            $table->longText('short_order_message')->nullable();
            $table->string('short_delivery_date')->nullable();
            $table->string('short_post_code')->nullable();
            $table->string('user_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('comfirmation')->nullable();
            $table->string('status')->nullable();
            $table->text('commision')->nullable();
            $table->text('commision_payment')->nullable();
            $table->text('status_payment')->nullable();
            $table->text('reason')->nullable();
            $table->string('alert')->default('0');
            $table->string('seen')->default('0');
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
        Schema::dropIfExists('copy_short_orders');
    }
};
