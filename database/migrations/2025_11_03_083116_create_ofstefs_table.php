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
        Schema::create('ofstefs', function (Blueprint $table) {
            $table->id();
            $table->string('id_service', 11);
            $table->string('service_stef', 30);
            $table->string('komisi', 30);
            $table->string('durasi', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofstefs');
    }
};
