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
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('placeholder')->nullable();
            $table->string('name');
            $table->integer('sort')->nullable();
            $table->string('type');
            $table->string('class')->nullable();
            $table->string('default_value')->nullable();
            $table->string('help_text')->nullable();
            $table->text('options')->nullable();
            $table->boolean('is_required')->nullable();
            $table->boolean('is_disabled')->nullable();
            $table->boolean('show_at_table')->nullable();
            $table->boolean('show_at_overview')->nullable();
            $table->string('model');
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
        Schema::dropIfExists('custom_fields');
    }
};
