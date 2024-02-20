<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Images;
use App\Models\Videos;
use App\Models\Galeries;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Videos::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Images::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video');
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('vehicules', function(Blueprint $table){
            $table->foreignIdFor(Galeries::class)->nullable()->default(null)->constrained()->cascadeOnDelete();
        });

        Schema::table('galeries', function(Blueprint $table){
            $table->foreignIdFor(Videos::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Images::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerie');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('images');
        Schema::dropColumns('vehicules', 'galerie_id');
    }
};
