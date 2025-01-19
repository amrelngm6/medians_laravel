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
        
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->morphs('model');
            $table->morphs('user');
            $table->string('title', 191);
            $table->longtext('content')->nullable();
            $table->date('date');
            $table->date('expiry_date')->nullable();
            $table->integer('currency_id');
            $table->decimal('subtotal', 15);
            $table->decimal('discount_amount', 15)->default(0);
            $table->decimal('tax_amount', 15)->default(0);
            $table->decimal('total', 15);
            $table->unsignedBigInteger('status_id')->default(0);
            $table->integer('created_by')->default(0);
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
