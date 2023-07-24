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
        Schema::create('next_of_kin', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('name_1');
            $table->string('relationship_1');
            $table->string('phone_1');
            $table->string('address_1');
            $table->unsignedSmallInteger('lga_id_1');
            $table->unsignedSmallInteger('state_id_1');
            $table->string('name_2');
            $table->string('relationship_2');
            $table->string('phone_2');
            $table->string('address_2');
            $table->unsignedSmallInteger('lga_id_2');
            $table->unsignedSmallInteger('state_id_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('next_of_kin');
    }
};
