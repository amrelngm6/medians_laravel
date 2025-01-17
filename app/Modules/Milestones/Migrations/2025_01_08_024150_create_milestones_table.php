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
            $table->id();
            $table->morphs('model');
            $table->string('name', 191);
            $table->text('description')->nullable();
            $table->boolean('client_access')->nullable()->default(false);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('sort')->default(0);
            $table->integer('status_id')->default(0);
            $table->integer('business_id')->default(0);
            $table->integer('created_by')->default(0);
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
