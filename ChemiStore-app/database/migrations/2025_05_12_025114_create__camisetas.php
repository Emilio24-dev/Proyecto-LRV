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
        Schema::create('_camisetas', function (Blueprint $table) {
            $table->id();
            $table->string("Equipo_cami");
            $table->string("Marca_cami");
            $table->string("Talla_cami");
            $table->string("Tipo_cami");
            $table->decimal("Precio_cami");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_camisetas');
    }
};
