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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->date('expected_due_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('lead_id')->default(0);
            $table->integer('client_id')->default(0);
            $table->decimal('amount', 2)->default(0);
            $table->enum('status', ['0','won','lose']);
            $table->integer('created_by');
            $table->integer('business_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
