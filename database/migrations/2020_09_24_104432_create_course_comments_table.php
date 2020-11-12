<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content',255);
            $table->biginteger('reply_id')->unsigned();
            $table->foreign('reply_id')->references('id')->on('course_comments')->onDelete('cascade');
            $table->bigInteger('lession_id')->unsigned()->nullable();
            $table->foreign('lession_id')->references('id')->on('course_lessions')->onDelete('cascade');
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
        Schema::dropIfExists('course_comments');
    }
}
