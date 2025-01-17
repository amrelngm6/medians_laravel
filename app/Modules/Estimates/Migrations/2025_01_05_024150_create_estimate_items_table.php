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
        Schema::create('estimate_items', function (Blueprint $table) {
            $table->id();
            $table->integer('estimate_id');
            $table->string('item_name', 191);
            $table->text('description');
            $table->integer('quantity')->default(1);
            $table->decimal('unit_price', 15)->default(0);
            $table->decimal('subtotal', 15)->default(0);
            $table->decimal('tax', 15)->default(0);
            $table->decimal('total', 15)->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
