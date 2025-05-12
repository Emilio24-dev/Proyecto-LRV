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
        Schema::create('_balones', function (Blueprint $table) {
            $table->id();
            $table->string("Marca_bal");
            $table->integer("Tamaño_bal");
            $table->decimal("Precio_bal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_balones');
    }
};
