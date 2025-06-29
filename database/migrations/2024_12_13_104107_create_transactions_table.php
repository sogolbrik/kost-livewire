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
            $table->foreignId('user_id');
            $table->foreignId('bedroom_id');
            $table->date('payment_date');
            $table->string('billing_period', 10);
            $table->string('payment_proof');
            $table->string('entering_room', 20)->nullable();
            $table->string('duration', 20);
            $table->string('code')->unique();
            $table->enum('status_payment', ['new', 'old'])->default('new');
            $table->enum('status', ['Ditunda', 'Disetujui', 'Ditolak'])->default('Ditunda');
            $table->timestamps();
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
