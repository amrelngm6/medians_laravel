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
        Schema::create('model_members', function (Blueprint $table) {
            $table->id();
            $table->string('model_type', 191);
            $table->integer('model_id');
            $table->string('user_type', 191);
            $table->integer('user_id');
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
        Schema::dropIfExists('model_members');
    }
};
