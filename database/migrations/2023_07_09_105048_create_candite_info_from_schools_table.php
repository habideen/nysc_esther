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
        Schema::create('candite_info_from_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institution_id');
            $table->string('jamb_reg_no', 10);
            $table->string('matric_no', 20);
            $table->string('course_of_study', 100);
            $table->date('graduation_date');
            $table->string('qualification');
            $table->string('last_name', 30);
            $table->string('first_name', 30);
            $table->string('middle_name', 30);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('uploaded_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candite_info_from_schools');
    }
};
