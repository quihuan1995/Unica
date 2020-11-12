<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_location', function (Blueprint $table) {
            $table->Increments('id');
            $table->bigInteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->string('location',255);
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
        Schema::dropIfExists('menu_location');
    }
}
