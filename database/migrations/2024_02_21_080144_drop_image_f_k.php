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
        Schema::table('galeries', function(Blueprint $table){
            $table->dropForeignIdFor(Images::class);
        });

        Schema::table("images", function (Blueprint $table) {
            $table->foreignIdFor(Galeries::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeries', function(Blueprint $table){
            $table->foreignIdFor(Images::class)->nullable()->constrained()->cascadeOnDelete();
        });

        Schema::table("images", function (Blueprint $table) {
            $table->dropForeignIdFor(Galeries::class);
        });
    }
};
