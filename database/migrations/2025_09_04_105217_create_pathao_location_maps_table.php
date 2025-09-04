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
        Schema::create('pathao_location_maps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('state_id')->index();
            $table->unsignedBigInteger('city_id')->index();
            $table->string('area_text')->nullable()->index();

            $table->unsignedBigInteger('pathao_city_id')->index();
            $table->unsignedBigInteger('pathao_zone_id')->index();
            $table->unsignedBigInteger('pathao_area_id')->nullable()->index();

            $table->boolean('is_default')->default(false);

            $table->timestamps();

            $table->unique(['state_id', 'city_id', 'area_text']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pathao_location_maps');
    }
};
