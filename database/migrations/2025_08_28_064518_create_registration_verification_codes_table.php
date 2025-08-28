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
        Schema::create('registration_verification_codes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('email')->nullable()->unique('email');
            $table->string('phone', 20)->nullable()->unique('phone');
            $table->text('code');
            $table->tinyInteger('is_verified')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_verification_codes');
    }
};
