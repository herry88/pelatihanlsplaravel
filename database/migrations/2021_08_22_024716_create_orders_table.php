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
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('jumlah');
<<<<<<< HEAD
            $table->bigInteger('sub_total');
            $table->bigInteger('status')->default(0);
=======
            $table->bigInteger('sub_total')->nullable();
            $table->bigInteger('status')->default('0');
>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
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
