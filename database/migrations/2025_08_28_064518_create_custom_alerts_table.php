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
        Schema::create('custom_alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->default(0);
            $table->string('type');
            $table->string('banner')->nullable();
            $table->string('link');
            $table->text('description');
            $table->string('text_color')->nullable();
            $table->string('background_color')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_alerts');
    }
};
