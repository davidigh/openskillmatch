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
        Schema::create('research_main', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('title_research');
            $table->date('research_date');
            $table->text('brief_research');
            $table->string('research_type');
            $table->string('discipline_field');
            $table->string('institution');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_main');
    }
};
