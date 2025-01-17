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
            $table->bigIncrements('invoice_id')->primary();
            $table->integer('client_id');
            $table->date('date');
            $table->date('due_date')->nullable();
            $table->integer('currency_id');
            $table->decimal('subtotal', 15);
            $table->decimal('discount_amount', 15)->default(0);
            $table->decimal('tax_amount', 15)->default(0);
            $table->decimal('total', 15);
            $table->integer('status')->default(0);
            $table->string('code', 100)->nullable();
            $table->integer('business_id')->default(0);
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
