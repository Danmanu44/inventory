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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_store');
            $table->unsignedBigInteger('destination_store');
            $table->unsignedBigInteger('user_id');
            $table->enum('acceptance_status', ['accepted', 'rejected'])->nullable();
            $table->unsignedBigInteger('item_id');
            $table->timestamps();
            $table->foreign('from_store')->references('id')->on('stores');
            $table->foreign('destination_store')->references('id')->on('stores');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
