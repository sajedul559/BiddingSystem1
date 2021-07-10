<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
            $table->increments('id');
            $table->string('f_username',15);
            $table->string('c_username',15);
            $table->integer('crop_id',10)->unsigned();
            $table->string('name',25);
            $table->string('email',30);
            $table->string('phone',15);
            $table->double('bid_price',10);
            $table->double('amount',10);
            $table->string('address',80);
            $table->string('division',15);
            $table->string('zip',10);
            $table->string('status',10);
            $table->string('transaction_id',30);
            $table->string('currency',10);
            $table->timestamps();

             $table->foreign('crop_id')->references('id')->on('crop_imports')->onDelete('cascade');
            $table->foreign('f_username')->references('username')->on('crop_imports')->onDelete('cascade');
            $table->foreign('c_username')->references('username')->on('user_registers')->onDelete('cascade');
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
