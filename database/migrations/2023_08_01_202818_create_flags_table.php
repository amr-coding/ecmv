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
        Schema::create('flags', function (Blueprint $table) {
            //Flags table:
            // id (Primary Key)
            // user_id (Foreign Key referencing Users table)
            // product_id (Foreign Key referencing Products table)
            // flag_reason
            // is_handled (boolean, indicating whether the flag is handled by admin)

            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->string('flag_reason');
            $table->boolean('is_handled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flags');
    }
};
