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
            $table->integer('id')->primary();
            $table->text('description');
            $table->string('user_type', 191);
            $table->integer('user_id');
            $table->dateTime('date');
            $table->dateTime('finished_date')->nullable();
            $table->integer('sort')->nullable();
            $table->integer('priority');
            $table->integer('status')->default(0);
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
