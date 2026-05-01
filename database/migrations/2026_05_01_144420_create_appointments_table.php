<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Appointment;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            // patient and doctor FK
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');

            // date and time
            $table->date('date');
            $table->time('time');

            // status
            $table->enum('status', [Appointment::STATUS_PENDING, 
                                    Appointment::STATUS_CONFIRMED,
                                    Appointment::STATUS_COMPLETED,
                                    Appointment::STATUS_CANCELLED])
                                    ->default(Appointment::STATUS_PENDING);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
