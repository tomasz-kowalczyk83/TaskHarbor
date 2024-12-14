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
            $table->id();
            $table->string('title', );
            $table->longText('description');
            $table->string('isbn', 13);
            $table->date('published_date');
            $table->integer('pages');
            // cover image <- how to store it
            // language <- need to create enum
            // categories <- pivot table
            // publisher <- relation with another model and table
            // author <- relation with another model and table
            // format <- need to define enum and formats of books
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
