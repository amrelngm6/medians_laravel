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
        Schema::create('location_info', function (Blueprint $table) {
            $table->integer('location_id')->primary();
            $table->integer('model_id')->nullable();
            $table->string('model_type')->nullable();
            $table->string('country', 10)->default('0');
            $table->string('city', 100)->nullable();
            $table->string('zip', 15)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('zone', 191)->nullable();
            $table->string('longitude', 191)->nullable();
            $table->string('latitude', 191)->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_info');
    }
};
