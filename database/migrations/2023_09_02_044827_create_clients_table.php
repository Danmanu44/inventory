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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiary');
            $table->string('name');
            $table->integer('phone_number');
            $table->text('address')->nullable();
            $table->text('ward')->nullable();
            $table->text('poll_unit')->nullable();
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedDecimal('price', 10, 1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
