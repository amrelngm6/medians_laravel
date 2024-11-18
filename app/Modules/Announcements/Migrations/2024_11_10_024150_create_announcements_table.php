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
        Schema::create('announcements', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('model_type')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('name', 191);
            $table->text('message')->nullable();
            $table->boolean('staff_access')->nullable();
            $table->boolean('client_access')->nullable();
            $table->boolean('is_private')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
