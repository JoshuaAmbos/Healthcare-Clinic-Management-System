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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // patient info
            $table->string('first_name');
            $table->string('middle_name')->default('None')->nullable();
            $table->string('last_name');

            // medical history
            $table->string('allergy')->default('None')->nullable();
            $table->string('chronic_conditions')->default('None')->nullable();
            $table->string('past_surgeries')->default('None')->nullable();
            $table->string('family_medical_history')->default('None')->nullable();
            $table->string('blood_group');

            // emergency contacts
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');

            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
