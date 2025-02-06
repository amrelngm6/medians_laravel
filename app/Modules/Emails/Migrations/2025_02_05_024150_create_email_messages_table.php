<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('email_messages', function (Blueprint $table) {
            $table->id();
            $table->string('email', 191);
            $table->string('subject', 191);
            $table->string('sender_email', 191);
            $table->string('sender_name', 191);
            $table->string('cc', 191);
            $table->string('reply_to', 191);
            $table->string('folder_name')->nullable();
            $table->longtext('message_text')->nullable();
            $table->longtext('message_html')->nullable();
            $table->string('message_id', 191)->nullable();
            $table->string('delivery_date', 191)->nullable();
            $table->datetime('time')->nullable();
            $table->integer('size')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('email_settings');
    }
};
