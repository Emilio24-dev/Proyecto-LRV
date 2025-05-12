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
        Schema::create('venta_uniforme', function (Blueprint $table) {
            $table->id();
            $table->integer("Venta de uniformes");
            $table->integer("Fkuniforme");
            $table->foreign("Fkuniforme")->references("id")->on("_uniformes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_uniforme');
    }
};
