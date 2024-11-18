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
            $table->integer('estimate_id')->primary();
            $table->string('model_type')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('client_id');
            $table->date('date');
            $table->longtext('content');
            $table->date('expiry_date')->nullable();
            $table->integer('currency_id');
            $table->decimal('subtotal', 15);
            $table->decimal('discount_amount', 15)->default(0);
            $table->decimal('tax_amount', 15)->default(0);
            $table->decimal('total', 15);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('estimates');
    }
};
