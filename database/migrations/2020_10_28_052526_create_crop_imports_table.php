<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_imports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20);
            $table->string('crop_name',35);
            $table->string('crop_session',10);
            $table->integer('crop_type')->unsigned();
            $table->string('crop_quantity',25);
            $table->string('crop_location',50);
            $table->string('bid_rate',10);
            $table->string('crop_description',255);
            $table->date('last_date_bidding');
            $table->string('crop_image',150);
            $table->string('crop_image2',150);
            $table->string('status',15);
            $table->string('condition',15);
            $table->string('Action',15);
            $table->timestamps();

            $table->foreign('username')->references('username')->on('farmer_registers')->onDelete('cascade');
            $table->foreign('crop_type')->references('id')->on('categories_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crop_imports');
    }
}
