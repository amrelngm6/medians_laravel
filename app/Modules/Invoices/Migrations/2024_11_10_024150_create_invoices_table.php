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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->morphs('model');
            $table->date('date');
            $table->date('due_date')->nullable();
            $table->integer('currency_id')->default(0)->nullable();
            $table->decimal('subtotal', 15)->default(0)->nullable();
            $table->decimal('discount_amount', 15)->default(0);
            $table->decimal('tax_amount', 15)->default(0);
            $table->decimal('total', 15)->default(0)->nullable();
            $table->integer('status_id')->default(0);
            $table->string('code', 100)->nullable();
            $table->integer('business_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
