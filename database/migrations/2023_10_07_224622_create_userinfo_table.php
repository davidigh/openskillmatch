<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfoTable extends Migration
{
    public function up()
    {
        Schema::create('userinfo', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name_user');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->integer('github_id')->nullable();
            $table->string('github_token')->nullable();
            $table->string('github_refresh_token')->nullable();
            $table->timestamp('register_time');
            $table->string('slug');
            $table->string('photo_profile')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userinfo');
    }
}
