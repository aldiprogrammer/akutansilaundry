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
        Schema::create('deposit_customers', function (Blueprint $table) {
            $table->id();
            $table->string('id_customer', 35);
            $table->string('customer', 50);
            $table->string('wa', 15);
            $table->string('saldo_awal', 30);
            $table->string('tambah_saldo', 30);
            $table->string('payment', 35);
            $table->string('saldo_akhir', 35);
            $table->string('tanggal', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposit_customers');
    }
};
