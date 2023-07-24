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
        Schema::create('other_information', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('present_address', 100);
            $table->unsignedSmallInteger('present_state_id');
            $table->unsignedSmallInteger('present_lga_id');
            $table->string('permanent_address', 100);
            $table->unsignedSmallInteger('permanent_state_id');
            $table->unsignedSmallInteger('permanent_lga_id');
            $table->unsignedSmallInteger('origin_state_id');
            $table->unsignedSmallInteger('origin_lga_id');
            $table->string('have_previous_callup_letter', 50)->nullable();
            $table->string('health_status', 50);
            $table->string('physical_challenges')->nullable();
            $table->string('cloth_kit');
            $table->string('shoe_kit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_information');
    }
};
