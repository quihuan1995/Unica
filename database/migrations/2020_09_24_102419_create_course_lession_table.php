<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseLessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['chapter','lession']);
            $table->string('title');
            $table->integer('sort');
            $table->tinyInteger('status');
            $table->string('video');
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->bigInteger('lession_id')->unsigned()->nullable();
            $table->foreign('lession_id')->references('id')->on('course_lessions')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_lessions');
    }
}
