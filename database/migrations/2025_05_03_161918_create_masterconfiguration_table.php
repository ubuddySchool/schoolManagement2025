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
        Schema::create('masterconfiguration', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('session_id');
            $table->integer('assign_module')->default(0);
            $table->integer('assign_class')->comment('Basic Configuration')->default(0);
            $table->integer('assign_section')->default(0);
            $table->integer('assign_subject_to_school')->default(0);
            $table->integer('assign_subject_to_class')->default(0);
            $table->integer('assign_subject_type')->default(0);
            $table->integer('assign_subject_to_module')->default(0);
            $table->integer('assign_term_to_school')->default(0);
            $table->integer('assign_term_to_class')->default(0);
            $table->integer('student_form')->default(0);
            $table->integer('staff_form')->default(0);
            $table->integer('student_enquiry')->comment('Module Configuration')->default(0);
            $table->integer('staff_enquiry')->default(0);
            $table->integer('assign_houses')->default(0);
            $table->integer('staff_attendance')->default(0);
            $table->integer('student_attendance')->default(0);
            $table->integer('admit_card_layout')->default(0);
            $table->integer('assgin_grade')->default(0);
            $table->integer('assgin_result_type')->default(0);
            $table->integer('marking_pattern')->default(0);
            $table->integer('assgin_layout')->default(0);
            $table->integer('annual_calender')->default(0);
            $table->integer('certificate')->default(0);
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
        Schema::dropIfExists('masterconfiguration');
    }
};
