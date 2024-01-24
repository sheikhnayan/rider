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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('model')->nullable();
            $table->string('icon')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('minimum_rate')->nullable();
            $table->string('daily_rate')->nullable();
            $table->string('hourly_outside_rate')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
