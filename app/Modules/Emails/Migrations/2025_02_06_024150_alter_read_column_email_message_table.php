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
        Schema::table('email_messages', function (Blueprint $table) {
            $table->integer('read')->default(0)->after('size'); // Add the column
            $table->integer('favourite')->default(0)->after('size'); // Add the column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_messages', function (Blueprint $table) {
            $table->dropColumn('read');   // Remove the column
            $table->dropColumn('favourite');   // Remove the column
        });
    }
};
