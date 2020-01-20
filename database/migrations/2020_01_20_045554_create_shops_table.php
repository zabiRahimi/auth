<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
          $table->increments('id');
          $table->string('shop');
          $table->string('name');
          $table->string('username')->unique();
          $table->string('mobaile')->unique();
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->integer('date_ad');
          $table->integer('date_up');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
