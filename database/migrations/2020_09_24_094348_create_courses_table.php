<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->longText('description',255);
            $table->decimal('regular_price',10);
            $table->dateTime('sale_price_date_from',6);
            $table->dateTime('sale_price_date_to',6);
            $table->longText('will_be_learning',255);
            $table->longText('short_description',255);
            $table->string('thumbnail',255);
            $table->string('video_intro',255);
            $table->decimal('sale_price',10);
            $table->decimal('total_rate',10);
            $table->Integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}