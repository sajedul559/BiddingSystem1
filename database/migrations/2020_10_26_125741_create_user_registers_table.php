<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('register_as',25);
            $table->string('username',20)->unique();
            $table->string('email',40)->unique();
            $table->string('mobile',12);
            $table->date('dob',30);
            $table->string('division',25);
            $table->string('address',50);
            $table->string('zip_code',15);
            $table->string('gender',10);
            $table->string('password',255);
            $table->string('profile_pic',50);
            $table->string('action',15);
            $table->string('condition',15);
            $table->string('NID_1',100);
            $table->string('NID_2',100);
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
        Schema::dropIfExists('user_registers');
    }
}
