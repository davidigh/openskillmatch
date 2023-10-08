<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->foreignId('employee_type_id'); // ensure there is an employee_types table
            $table->string('company_name');
            $table->string('location');
            $table->string('worktype');
            $table->boolean('current_position');
            $table->date('entry_date');
            $table->date('exit_date')->nullable();
            $table->text('work_description');
            $table->foreignId('user_id')->references('id_user')->on('userinfo');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
