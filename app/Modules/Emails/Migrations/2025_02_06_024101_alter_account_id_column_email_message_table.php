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
        Schema::table('email_folders', function (Blueprint $table) {
            $table->unsignedBigInteger('account_id')->nullable()->after('email'); // Add the column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_folders', function (Blueprint $table) {
            $table->dropColumn('account_id');   // Remove the column
        });
    }
};
