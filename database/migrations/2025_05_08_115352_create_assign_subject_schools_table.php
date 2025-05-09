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
        Schema::create('assign_subject_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('session_id');
            $table->json('subject_id'); // Stores selectedSubjects as JSON
            $table->tinyInteger('status')->default(0); // 0: draft, 1: locked
            $table->timestamps();
        
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('schoolsessions')->onDelete('cascade');
            $table->unique(['school_id', 'session_id']); // Prevent duplicates
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_subject_schools');
    }
};
