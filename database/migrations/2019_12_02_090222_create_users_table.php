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
            $table->string('name', 128);
            $table->sting('email', 128)->unique();
            $table->sting('phone_number', 32)->unique();
            $table->sting('password', 128);
            $table->bigInteger('reword_point')->default(0);
            $table->tinyInteger('email_veryfied')->default(0);
            $table->tinyInteger('email_veryfication_token', 80)->nullable();
            $table->string('facebook_id', 32)->nullable();
            $table->string('gmail_id', 32)->nullable();
            $table->remember_token();
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
