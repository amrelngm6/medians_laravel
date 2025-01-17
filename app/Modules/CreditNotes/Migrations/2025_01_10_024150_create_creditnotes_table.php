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
        Schema::create('credit_notes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->nullable();
            $table->morphs('model');
            $table->date('date');
            $table->text('terms')->nullable();
            $table->text('admin_note')->nullable();
            $table->text('client_note')->nullable();
            $table->integer('currency_id')->default(0);
            $table->decimal('subtotal', 15);
            $table->decimal('tax_amount', 15)->default(0);
            $table->decimal('total', 15);
            $table->integer('status_id')->default(0);
            $table->string('created_by', 100);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_notes');
    }
};
