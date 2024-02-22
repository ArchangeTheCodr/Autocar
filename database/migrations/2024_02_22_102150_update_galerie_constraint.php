<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Galeries;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::table('vehicules', function(Blueprint $table){
            $table->dropForeignIdFor(Galeries::class);
        });
        Schema::dropColumns('vehicules', 'galeries_id');

        Schema::table('vehicules', function(Blueprint $table){
            $table->foreignIdFor(Galeries::class)->nullable()->default(null)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicules', function(Blueprint $table){
            $table->foreignIdFor(Galeries::class)->nullable()->default(null)->constrained()->cascadeOnDelete();
        });
    }
};
