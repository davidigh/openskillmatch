<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsUserTable extends Migration
{
    public function up()
    {
        Schema::create('skills_user', function (Blueprint $table) {
            $table->id('id_skill');
            $table->foreignId('id_tag');  // assuming you have tags table
            $table->foreignId('id_user')->references('id_user')->on('userinfo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills_user');
    }
}
