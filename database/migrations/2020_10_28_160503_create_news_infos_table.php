<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('news_name',20);
            $table->string('news_description',50);
            $table->string('long_description',255);
            $table->string('news_image',50);
            $table->timestamps();

            $table->foreign('username')->references('username')->on('admin_registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_infos');
    }
}
