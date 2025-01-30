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
        Schema::create('pipelines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->integer('sort')->default(1);
            $table->string('model', 191);
            $table->integer('created_by');
            $table->integer('business_id');
            $table->timestamps();
        });
        
        Schema::create('pipeline_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->integer('pipeline_id');
            $table->integer('sort')->default(1);
            $table->string('color', 50);
            $table->integer('created_by');
            $table->integer('business_id');
            $table->timestamps();
        });
        
        Schema::create('pipeline_selected', function (Blueprint $table) {
            $table->id();
            $table->integer('pipeline_id');
            $table->integer('pipeline_stage_id');
            $table->morphs('model');
            $table->integer('created_by');
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pipelines');
        Schema::dropIfExists('pipeline_stages');
        Schema::dropIfExists('pipeline_selected');
    }
};
