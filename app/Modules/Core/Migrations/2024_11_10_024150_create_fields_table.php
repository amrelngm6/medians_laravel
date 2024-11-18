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
        Schema::create('fields', function (Blueprint $table) {
            $table->integer('field_id')->primary();
            $table->string('model')->nullable();
            $table->integer('position')->nullable();
            $table->string('title', 191)->nullable();
            $table->string('code', 100)->nullable();
            $table->string('type', 191)->nullable()->default('text');
            $table->text('default_value')->nullable();
            $table->integer('created_by');
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_fields');
    }
};
