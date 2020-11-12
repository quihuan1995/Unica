<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name',50);
            $table->string('email',60)->unique();
            $table->json('address',255);
            $table->string('phone',30);
            $table->enum('status',['active','deactive']);
            $table->date('birth');
            $table->string('password',60);
            $table->string('avatar',255);
            $table->enum('gender',['male','female','others']);
            // $table->string('permission',255);
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
        Schema::dropIfExists('users');
    }
}