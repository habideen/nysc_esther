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
            $table->string('title', 30);
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->string('middle_name', 30)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('place_of_birth', 100)->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('marital_status', 30)->nullable();
            $table->string('qualification', 30)->nullable();
            $table->string('security_question', 200)->nullable();
            $table->string('security_answer', 50)->nullable();
            $table->string('national_identity_number', 11)->nullable();
            $table->string('image', '70')->nullable();
            $table->bigInteger('institution_verified')->nullable();
            $table->string('phone_1', 20)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('account_type', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
