<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tag_relation_main', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_research')->constrained('research_main');
            $table->foreignId('tag_id')->constrained('tag_base');
            $table->unsignedBigInteger('auto_id');
            $table->timestamps();
        });        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_relation_main');
    }
};
