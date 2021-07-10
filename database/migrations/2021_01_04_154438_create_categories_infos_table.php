<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_username',15);
            $table->string('categories_name',15);
            $table->string('categories_description',150);
            $table->string('categories_status',10);
            $table->timestamps();

            $table->foreign('a_username')->references('username')->on('admin_registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_infos');
    }
}
