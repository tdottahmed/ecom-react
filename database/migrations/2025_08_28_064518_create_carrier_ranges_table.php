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
        Schema::create('carrier_ranges', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('carrier_id');
            $table->string('billing_type', 20);
            $table->double('delimiter1', 25, 2);
            $table->double('delimiter2', 25, 2);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrier_ranges');
    }
};
