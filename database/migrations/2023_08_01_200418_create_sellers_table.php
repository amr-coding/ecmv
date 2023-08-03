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
        Schema::create('sellers', function (Blueprint $table) {
            // Sellers table
            // id (Primary Key, Foreign Key referencing Users table)
            // seller_name
            // full_address_street
            // full_address_city
            // full_address_state
            // full_address_zip
            // business_hours (JSON field to store days and times of business operation)
            // calendar_year (JSON field to represent optional closed dates)
            $table->id();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->string('shop_name')->nullable();
            $table->string('full_address_street')->nullable();
            $table->string('full_address_city')->nullable();
            $table->string('full_address_state')->nullable();
            $table->string('full_address_zip')->nullable();
            $table->json('business_hours')->nullable();
            $table->json('calendar_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
