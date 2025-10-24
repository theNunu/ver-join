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
        Schema::create('usuario_bebida', function (Blueprint $table) {
            $table->id('usuario_bebida_id');
            $table->string('nombre_usuario');
            $table->foreignId('menu_option_id')->constrained('menus_options', 'menu_option_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_bebida');
    }
};
