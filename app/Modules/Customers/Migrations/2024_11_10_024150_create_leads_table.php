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
        Schema::create('leads', function (Blueprint $table) {
            
            $table->bigIncrements('lead_id')->primary();
            $table->enum('type', ['person', 'company'])->nullable()->default('person');
            $table->string('first_name', 191);
            $table->string('last_name', 191)->nullable();
            $table->string('picture', 191)->nullable();
            $table->string('email', 100)->nullable();
            
            $table->string('company', 191)->nullable();
            $table->text('about')->nullable();
            $table->integer('assigned_user')->default(0);
            $table->integer('source_id');
            
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
