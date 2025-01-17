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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->morphs('model');
            $table->decimal('amount', 15);
            $table->string('code',191)->nullable();
            $table->string('payment_method',191)->nullable();
            $table->date('date');
            $table->integer('status_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
