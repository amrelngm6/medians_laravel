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
        Schema::create('credit_note_items', function (Blueprint $table) {
            $table->id();
            $table->integer('credit_note_id')->default(0);
            $table->integer('invoice_item_id')->default(0);
            $table->integer('quantity')->default(0);
            $table->decimal('subtotal', 15);
            $table->decimal('unit_price', 15)->default(0);
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
        Schema::dropIfExists('credit_note_items');
    }
};
