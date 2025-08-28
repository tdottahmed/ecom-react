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
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type', 10)->default('real');
            $table->integer('product_id');
            $table->integer('user_id')->nullable();
            $table->string('custom_reviewer_name', 100)->nullable();
            $table->string('custom_reviewer_image', 100)->nullable();
            $table->integer('rating')->default(0);
            $table->mediumText('comment');
            $table->string('photos')->nullable();
            $table->integer('status')->default(1);
            $table->integer('viewed')->default(0);
            $table->boolean('created_at_is_custom')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
