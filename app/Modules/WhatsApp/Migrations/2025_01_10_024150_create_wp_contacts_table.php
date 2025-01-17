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
        Schema::create('wp_contacts', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->string('wa_id',191)->nullable();
            $table->string('name',191)->nullable();
            $table->string('phone_number',191)->nullable();
            $table->string('picture',191)->nullable();
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
        Schema::dropIfExists('wp_contacts');
    }
};
