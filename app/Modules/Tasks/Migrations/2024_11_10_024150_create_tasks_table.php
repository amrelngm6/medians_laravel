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
        
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('task_id')->primary();
            $table->morphs('model');
            $table->mediumText('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('priority')->nullable();
            $table->date('start_date');
            $table->date('due_date')->nullable();
            $table->date('finished_date')->nullable();
            $table->boolean('is_public')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->integer('points')->nullable()->default(1);
            $table->integer('sort')->default(0);
            $table->boolean('visible_to_client')->default(false);
            $table->integer('status')->default(0);
            $table->integer('created_by');
            $table->integer('business_id')->default(0);
            $table->integer('milestone_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
