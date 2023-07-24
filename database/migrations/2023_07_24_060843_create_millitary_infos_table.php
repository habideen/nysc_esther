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
        Schema::create('millitary_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('naf_na_navy');
            $table->string('nia');
            $table->string('npf');
            $table->string('national_awardee');
            $table->string('national_language');
            $table->string('states_visited');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('millitary_infos');
    }
};
