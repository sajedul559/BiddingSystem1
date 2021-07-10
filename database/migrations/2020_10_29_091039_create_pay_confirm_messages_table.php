<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayConfirmMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_confirm_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_id',10)->unsigned();
            $table->string('f_username',20);
            $table->string('crop_name',15);
            $table->string('cust_username',20);
            $table->string('account_type',10);
            $table->string('account_id',25);
            $table->string('confirm_price',15);
            $table->string('message',70);
            $table->timestamps();

            $table->foreign('crop_id')->references('crop_id')->on('bid_messages')->onDelete('cascade');
            $table->foreign('cust_username')->references('cust_username')->on('bid_messages')->onDelete('cascade');
            $table->foreign('f_username')->references('username')->on('farmer_registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_confirm_messages');
    }
}
