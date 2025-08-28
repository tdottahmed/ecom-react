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
        Schema::create('customer_package_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('customer_package_id');
            $table->string('payment_method', 255);
            $table->double('amount', 20, 2);
            $table->longText('payment_details')->nullable();
            $table->integer('approval')->default(1);
            $table->integer('offline_payment')->default(2)->comment('1=offline payment
2=online paymnet');
            $table->string('reciept', 150);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_package_payments');
    }
};
