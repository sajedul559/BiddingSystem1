<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_id',10)->unsigned();
            $table->string('crop_name',15);
            $table->string('f_username');
            $table->string('cust_username');
            $table->string('name',15);
            $table->string('bid_price',10);
            $table->string('message',50);
            $table->timestamps();

            $table->foreign('crop_id')->references('id')->on('crop_imports')->onDelete('cascade');
            $table->foreign('f_username')->references('username')->on('crop_imports')->onDelete('cascade');
            $table->foreign('cust_username')->references('username')->on('user_registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bid_messages');
    }
}
