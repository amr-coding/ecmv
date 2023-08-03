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
        Schema::create('products', function (Blueprint $table) {
            //    Products table:
            //     id (Primary Key)
            //     seller_id (Foreign Key referencing Sellers table)
            //     category_id (Foreign Key referencing Categories table)
            //     product_name
            //     price
            //     quantity
            //     is_under_sale (boolean, indicating whether the product is on sale)
            //     sale_percentage
            //     sale_start_date
            //     sale_end_date
            //     is_active (boolean, indicating whether the product is available for purchase)

            $table->id();
            $table->foreignId('seller_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('product_name');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->boolean('is_under_sale');
            $table->integer('sale_percentage')->nullable();
            $table->date('sale_start_date')->nullable();
            $table->date('sale_end_date')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
