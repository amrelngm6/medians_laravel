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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->string('item_name', 191)->nullable();
            $table->decimal('subtotal', 15);
            $table->decimal('quantity', 15)->default(0);
            $table->decimal('unit_price', 15)->default(0);
            $table->decimal('tax', 15)->default(0);
            $table->decimal('total', 15);
            $table->integer('status_id')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
