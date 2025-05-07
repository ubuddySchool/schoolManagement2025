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
        Schema::create('assign_student_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('session_id');
            $table->json('auth_form_id');
            $table->tinyInteger('status')->default(0); 
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('schoolsessions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_student_form');
    }
};
