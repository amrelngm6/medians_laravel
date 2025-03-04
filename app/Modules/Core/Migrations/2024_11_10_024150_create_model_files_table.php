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
        Schema::create('model_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name', 191);
            $table->morphs('model');
            $table->string('path', 191);
            $table->integer('size');
            $table->string('filetype', 40)->nullable();
            $table->integer('visible_to_customer')->default(0);
            $table->string('external_link')->nullable();
            $table->string('thumbnail_link')->nullable()->comment('For external usage');
            $table->string('mime_type', 191);
            $table->morphs('user');
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_files');
    }
};
