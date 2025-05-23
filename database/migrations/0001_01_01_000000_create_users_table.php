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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('subadmin_id')->nullable();
            $table->string('school_username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('u_code')->unique();
            $table->integer('school_code')->nullable();
            $table->integer('dise_code')->nullable();
            $table->string('board_name')->nullable();
            $table->string('medium')->nullable();
            $table->integer('total_student')->nullable();
            $table->string('contact_number', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('locality')->nullable();
            $table->string('website')->nullable();
            $table->string('school_image')->nullable();
            $table->integer('status')->default(1)->comment('1->active,0->inactive');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
