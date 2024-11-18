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
        Schema::create('milestones', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('model_type')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('name', 191);
            $table->text('description')->nullable();
            $table->boolean('client_access')->nullable()->default(false);
            $table->date('start_date')->nullable();
            $table->date('end_date');
            $table->integer('sort')->default(0);
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
