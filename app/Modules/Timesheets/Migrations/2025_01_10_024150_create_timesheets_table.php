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
        
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->morphs('model');
            $table->morphs('user');
            $table->text('notes')->nullable();
            $table->datetime('start')->nullable();
            $table->datetime('end')->nullable();
            $table->unsignedBigInteger('status_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
