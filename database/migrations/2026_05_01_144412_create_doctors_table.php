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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            // doctor info
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');

            // specialization and qualification
            $table->string('specialization');
            $table->string('qualifications');

            // license
            $table->string('license');

            // contacts
            $table->string('contact_number');

            // email
            $table->string('email')->unique();

            // bio
            $table->string('bio');

            // assigned clinic
            $table->string('assigned_clinic');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
