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
        Schema::create('bedrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('price', 12);
            $table->string('type', 30);
            $table->string('width', 30);
            $table->text('description');
            $table->string('photo')->nullable();
            $table->enum('status', ['available', 'occupied'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedrooms');
    }
};
