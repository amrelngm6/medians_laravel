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
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer('contract_id')->primary();
            $table->string('model_type', 191)->nullable();
            $table->integer('model_id')->nullable();
            $table->string('subject', 191);
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->integer('client_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('created_by', 100);
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
