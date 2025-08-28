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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('receiver', 20);
            $table->string('identifier', 100);
            $table->string('email_type', 255);
            $table->string('subject', 255);
            $table->text('default_text')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_status_changeable')->default(true)->comment('1 = changeable ; 0 = non-changeable');
            $table->boolean('is_dafault_text_editable')->default(true)->comment('1 = editable ; 0 = non-editable

');
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
        Schema::dropIfExists('email_templates');
    }
};
