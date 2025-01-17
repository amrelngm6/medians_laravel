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
        Schema::create('estimate_requests', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer('estimate_id')->nullable();
            $table->longText('message');
            $table->dateTime('date')->nullable();
            $table->integer('user_id')->default(0);
            $table->string('user_type', 191);
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
        Schema::dropIfExists('estimate_requests');
    }
};
