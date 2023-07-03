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
        Schema::create('d_b_restaurants', function (Blueprint $table) {
            $table->increments("id");
            $table->string("Nombres");
            $table->string("Apellidos");
            $table->string("Numero identificacion");
            $table->string("E-mail");
            $table->string("Telefono");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_b_restaurants');
    }
};
