<?php

use App\Models\Genre;
use App\Models\Serie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('genre_serie', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Genre::class);
            $table->foreignIdFor(Serie::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_serie');
    }
};
