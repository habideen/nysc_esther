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
        Schema::create('institution_attendeds', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('primary_institution_1');
            $table->year('primary_from_year_1');
            $table->year('primary_to_year_1');
            $table->string('primary_award_1');
            $table->year('primary_graduation_year_1');
            $table->string('secondary_institution_1');
            $table->year('secondary_from_year_1');
            $table->year('secondary_to_year_1');
            $table->string('secondary_award_1');
            $table->year('secondary_graduation_year_1');

            $table->string('primary_institution_2');
            $table->year('primary_from_year_2');
            $table->year('primary_to_year_2');
            $table->string('primary_award_2');
            $table->year('primary_graduation_year_2');
            $table->string('secondary_institution_2');
            $table->year('secondary_from_year_2');
            $table->year('secondary_to_year_2');
            $table->string('secondary_award_2');
            $table->year('secondary_graduation_year_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institution_attendeds');
    }
};
