<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pathao_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id'); // references pathao_cities.id (Pathao city id)
            $table->string('name');
            $table->timestamps();

            $table->index(['city_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pathao_zones');
    }
};
