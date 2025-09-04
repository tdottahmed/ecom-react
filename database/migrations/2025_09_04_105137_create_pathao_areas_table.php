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
        Schema::create('pathao_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zone_id'); // references pathao_zones.id (Pathao zone id)
            $table->string('name');
            $table->timestamps();

            $table->index(['zone_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pathao_areas');
    }
};
