<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_id')->unsigned();
            $table->string('f_username');
            $table->string('c_username');
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
        Schema::dropIfExists('wishlists');
    }
}
