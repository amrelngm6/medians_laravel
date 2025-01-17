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

        Schema::create('wp_reactions', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->string('reaction_id',191)->nullable();
            $table->string('message_id',191)->nullable();
            $table->string('reaction_type',191)->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wp_reactions');
    }
};
