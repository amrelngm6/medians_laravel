<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('email_accounts', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->string('email', 191)->unique();
            $table->string('imap_host')->default('localhost');
            $table->string('imap_port')->default('993');
            $table->string('imap_encryption')->nullable();
            $table->string('imap_username')->nullable();
            $table->string('imap_password')->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('email_settings');
    }
};
