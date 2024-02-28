<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Vehicule;
use App\Models\ReservationItem;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicules', function (BluePrint $table) {
            $table->unsignedInteger('total_quantity')->default(1);
            $table->unsignedInteger('available_quantity')->default(1);
        });

        Schema::create('reservation_item', function (BluePrint $table) {
            $table->date('start_date')->nullable($value = false);
            $table->date('end_date')->nullable($value = false);
            $table->unsignedInteger('vehicule_number')->default(1);
            $table->decimal('total_price');
            $table->foreignIdFor(Vehicule::class);
        });

        Schema::create('reservation', function (BluePrint $table) {
            $table->decimal('total_price');
            $table->foreignIdFor(ReservationItem::class);
            $table->foreignIdFor(User::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
