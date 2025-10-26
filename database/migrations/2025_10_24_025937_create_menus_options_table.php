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
        Schema::create('menus_options', function (Blueprint $table) {
            $table->id('menu_option_id');
            $table->foreignId('menu_id')->constrained('menus', 'menu_id')->onDelete('cascade');
            /* 
            foreignId('menu_id')...: crea un campo menu_id entero y lo marca como foreign key
             referenciando menus.menu_id. onDelete('cascade') significa que si borras un menu, 
             todas sus menu_options se borran automáticamente.
             */
            $table->string('nombre');
            $table->decimal('precio', 8, 2);
            $table->timestamps(); //agrega created_at y updated_at.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus_options');
    }
};
