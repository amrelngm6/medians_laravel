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
        Schema::create('menu', function (Blueprint $table) {
            $table->increment('id')->primary();
            $table->string('name')->nullable();
            $table->string('route_name')->nullable();
            $table->string('icon')->nullable();
            $table->integer('sort')->default(0);
            $table->integer('parent_id')->default(0);
            $table->integer('role_id')->default(0);
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestones');
    }
};
