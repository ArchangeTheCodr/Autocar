<?php

use App\Models\Category;
use App\Models\Marque;
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
        Schema::table("vehicules", function (Blueprint $table) {
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
        });

        Schema::table("vehicules", function (Blueprint $table) {
            $table->foreignIdFor(Marque::class)->nullable()->constrained()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table("vehicules", function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });

        Schema::table("vehicules", function (Blueprint $table) {
            $table->dropForeignIdFor(Marque::class);
        });

    }
};
