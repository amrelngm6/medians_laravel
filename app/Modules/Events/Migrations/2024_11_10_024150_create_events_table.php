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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id')->primary();
            $table->string('model_type')->nullable();
            $table->integer('model_id')->nullable();
            $table->mediumText('title');
            $table->text('description')->nullable();
            $table->string('user_type')->nullable();
            $table->integer('user_id');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->integer('is_public')->default(0);
            $table->integer('status')->default(0);
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
