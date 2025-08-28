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
        Schema::create('notification_types', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('user_type', 20)->default('customer');
            $table->string('type', 100);
            $table->string('name', 100);
            $table->string('image', 100)->nullable();
            $table->string('default_text', 255);
            $table->tinyInteger('status')->default(1);
            $table->string('addon', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_types');
    }
};
