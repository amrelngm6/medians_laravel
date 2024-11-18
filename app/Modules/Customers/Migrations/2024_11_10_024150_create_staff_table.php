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
        Schema::create('staff', function (Blueprint $table) {
            
            $table->bigIncrements('staff_id')->primary();
            $table->string('first_name', 191);
            $table->string('last_name', 191)->nullable();
            $table->string('picture', 191)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('job', 100)->nullable();
            $table->text('about')->nullable();
            $table->integer('role_id');
            
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('leads');
    }
};
