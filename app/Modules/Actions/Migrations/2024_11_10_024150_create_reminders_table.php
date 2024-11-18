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
        Schema::create('reminders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('model_type', 191);
            $table->integer('model_id');
            $table->string('user_type', 191);
            $table->integer('user_id');
            $table->text('description')->nullable();
            $table->dateTime('date');
            $table->integer('is_notified')->default(0);
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
