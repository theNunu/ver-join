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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title');
            $table->string('type');
            // $table->year('publication_year')->nullable();
            // $table->string('genre')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('editor_id');
            $table->unsignedBigInteger('translator_id');

                  // Claves foráneas
            $table->foreign('author_id')->references('author_id')->on('authors')->onDelete('cascade');
            $table->foreign('editor_id')->references('editor_id')->on('editors')->onDelete('cascade');
            $table->foreign('translator_id')->references('translator_id')->on('translators')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
