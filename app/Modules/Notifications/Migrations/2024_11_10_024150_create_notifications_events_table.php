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
        Schema::create('notifications_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('action')->nullable();
            $table->string('model')->nullable();
            $table->string('receiver_model')->nullable();
            $table->string('action_field')->nullable();
            $table->string('action_value')->nullable();
            $table->string('subject')->nullable();
            $table->integer('template_id')->nullable();
            $table->string('body_text')->nullable();
            $table->string('status', 2)->nullable();
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications_events');
    }
};
