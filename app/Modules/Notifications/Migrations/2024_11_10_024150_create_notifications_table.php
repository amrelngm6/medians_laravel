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
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('event_id');
            $table->string('receiver_type')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->string('model_type');
            $table->integer('model_id');
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
            $table->string('body_text')->nullable();
            $table->integer('status')->default(0);
            $table->integer('business_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
