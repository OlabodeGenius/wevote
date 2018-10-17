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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_type')->default('1');
            $table->integer('state')->nullable();
            $table->integer('lga')->nullable();
            $table->string('mobile')->unique();
            $table->string('sex')->nullable();  
            $table->string('dob')->nullable();                                                        
            $table->string('password');
            $table->mediumText('bio')->nullable();
            $table->string('avatar')->default('default.png');
            $table->boolean('email_verified')->default(false);
            $table->boolean('phone_verified')->default(false);
            $table->boolean('status')->default(true);
            $table->string('activation_token');
            $table->rememberToken();
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
