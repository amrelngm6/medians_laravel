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
        Schema::create('status_list', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id')->default(0);
            $table->string('name', 50);
            $table->string('color', 50)->nullable();
            $table->integer('sort')->default(1);
            $table->string('model', 191);
            $table->integer('created_by')->default(0);
            $table->integer('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_list');
    }
};
