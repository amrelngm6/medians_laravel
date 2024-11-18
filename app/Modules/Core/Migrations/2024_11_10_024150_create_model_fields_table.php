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
        Schema::create('model_fields', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('model_type');
            $table->integer('model_id');
            $table->integer('field_id');
            $table->integer('position')->nullable();
            $table->string('title', 191)->nullable();
            $table->string('code', 100)->nullable();
            $table->text('value')->nullable();
            $table->integer('created_by');
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
