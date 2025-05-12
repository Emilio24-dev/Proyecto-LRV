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
        Schema::create('venta_camisa', function (Blueprint $table) {
            $table->id();
            $table->integer("Venta de camisas");
            $table->integer("Fkcamisa");
            $table->foreign("Fkcamisa")->references("id")->on("_camisetas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_camisa');
    }
};
