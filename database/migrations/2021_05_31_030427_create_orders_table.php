<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default(0);
            $table->string('order_code');
            $table->integer('total_price');
            $table->integer('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('telephone');
            $table->integer('shipping_costs');
            $table->integer('final_price');
            $table->string('courier');
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
        Schema::dropIfExists('orders');
    }
}
