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
        Schema::create('users', function (Blueprint $table) {


            // Users table:
            //     id (Primary Key)
            //     username
            //     email
            //     phone_number
            //     password
            //     zip_code
            //     is_seller (boolean, indicating whether the user is also a seller)
            //     is_verified_email (boolean, indicating whether the email is verified)
            //     is_verified_phone (boolean, indicating whether the phone number is verified)

            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->string('zip_code');
            $table->boolean('is_seller')->default(false);
            $table->boolean('is_verified_email')->default(false);
            $table->boolean('is_verified_phone')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
