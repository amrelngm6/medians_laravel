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
        Schema::create('nlp_chat', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->text('description')->nullable();
            $table->longtext('reply')->nullable();
            $table->string('model_name');
            $table->integer('business_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlp_chat');
    }
};
