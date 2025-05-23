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
        Schema::create('assign_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('session_id');
            // $table->unsignedBigInteger('module_id');
            $table->json('module_id');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('module_id')->references('id')->on('master_modules')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('schoolsessions')->onDelete('cascade');
            $table->string('status')->default(0); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_modules');
    }
};
