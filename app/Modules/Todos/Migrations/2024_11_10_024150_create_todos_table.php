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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->morphs('user');
            $table->date('date');
            $table->dateTime('finished_time')->nullable();
            $table->integer('sort')->nullable();
            $table->integer('priority_id');
            $table->integer('status_id')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
