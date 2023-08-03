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
        Schema::create('reservations', function (Blueprint $table) {
            //Reservations table:
            // id (Primary Key)
            // user_id (Foreign Key referencing Users table)
            // product_id (Foreign Key referencing Products table)
            // reservation_time
            // contact_email
            // contact_phone
            // is_completed (boolean, indicating whether the reservation is completed)
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->dateTime('reservation_time');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
