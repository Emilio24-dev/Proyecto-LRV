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
        Schema::create('_uniformes', function (Blueprint $table) {
            $table->id();
            $table->string("Equipo_uni");
            $table->string("Marca_uni");
            $table->string("Talla_uni");
            $table->string("Tipo_uni");
            $table->decimal("Precio_uni");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_uniformes');
    }
};
