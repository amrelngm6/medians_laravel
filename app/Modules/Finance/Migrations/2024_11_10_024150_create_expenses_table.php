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
        Schema::create('expenses', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
            $table->integer('model_id');
            $table->string('model_type');
            $table->integer('category_id');
            $table->integer('currency_id');
            $table->decimal('amount', 15);
            $table->integer('tax_amount')->nullable();
            $table->string('reference_no', 100)->nullable();
            $table->date('date');
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
        Schema::dropIfExists('expenses');
    }
};
