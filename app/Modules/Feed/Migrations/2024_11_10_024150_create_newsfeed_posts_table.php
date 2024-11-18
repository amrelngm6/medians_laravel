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
        Schema::create('newsfeed_posts', function (Blueprint $table) {
            $table->integer('post_id')->primary();
            $table->string('user_type', 191);
            $table->integer('user_id');
            $table->enum('visibility', ['public','private'])->default('public');
            $table->text('content');
            $table->enum('type',['post','gallery', 'video','voice'])->default('post');
            $table->integer('pinned');
            $table->integer('status')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsfeed_posts');
    }
};
