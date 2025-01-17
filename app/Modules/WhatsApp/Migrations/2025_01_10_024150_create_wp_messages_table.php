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

        Schema::create('wp_messages', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->string('message_id',191)->nullable();
            $table->string('message_type',191)->nullable();
            $table->string('reply_message_id',191)->nullable();
            $table->string('conversation_id',191)->nullable();
            $table->string('sender_id',191)->nullable();
            $table->string('receiver_id',191)->nullable();
            $table->string('media_id',191)->nullable();
            $table->string('media_path',191)->nullable();
            $table->string('message_time',191)->nullable();
            $table->text('message_text');
            $table->text('message_json');
            $table->integer('sent')->default(0);
            $table->integer('read')->default(0);
            $table->datetime('sent_at');
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wp_messages');
    }
};
