<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


    /**
     * Run the migrations.
     *
     * @return void
     */
class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->Increments('id');
            $table->biginteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->string('title',255);
            $table->string('link',255);
            $table->string('icon',70);
            $table->Integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('menu_items');
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
        Schema::dropIfExists('menu_items');
    }
}