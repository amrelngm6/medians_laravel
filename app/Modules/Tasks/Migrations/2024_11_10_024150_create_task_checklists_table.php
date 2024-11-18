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
        Schema::create('task_checklists', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('task_id');
            $table->text('description');
            $table->integer('finished')->default(0);
            $table->date('finished_date');
            $table->integer('points')->default(0);
            $table->integer('sort')->default(0);
            $table->integer('user_id')->nullable();
            $table->boolean('visible_to_client')->default(false);
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('task_checklists');
    }
};
