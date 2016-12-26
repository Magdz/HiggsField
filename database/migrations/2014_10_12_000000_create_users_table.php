<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('profile_picture')->nullable();
            $table->string('hometown')->nullable();
            $table->string('marital_status')->nullable();
            $table->longText('about')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('phones_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::create('friends_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('friend_id');
            $table->integer('user_id');
            $table->boolean('state');
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
        Schema::drop('friends_users');
        Schema::drop('phones_users');
        Schema::drop('users');
    }
}
