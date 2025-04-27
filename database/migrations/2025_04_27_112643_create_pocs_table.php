<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePocsTable extends Migration
{
    public function up()
    {
        Schema::create('school_pocs', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->unsignedBigInteger('school_id'); // Ensure this is unsignedBigInteger
            $table->string('poc_name')->nullable();
            $table->string('poc_gender')->nullable();
            $table->date('poc_dob')->nullable();
            $table->string('poc_designation')->nullable();
            $table->string('poc_contact_number')->nullable();
            $table->string('poc_alternate_contact_number')->nullable();
            $table->string('poc_email')->nullable();
            $table->string('poc_status')->default(1);
            $table->timestamps();

            // Adding the foreign key constraint
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_pocs');
    }
}
