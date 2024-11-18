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
        Schema::create('tickets', function (Blueprint $table) {
            $table->integer('ticket_id')->primary();
            $table->integer('client_id');
            $table->integer('contact_id')->default(0);
            $table->integer('department');
            $table->integer('priority');
            $table->string('subject', 191);
            $table->text('message')->nullable();
            $table->integer('project_id')->nullable()->default(0);
            $table->integer('client_seen')->default(0);
            $table->integer('staff_seen')->default(0);
            $table->integer('assigned_to')->default(0);
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
        Schema::dropIfExists('tickets');
    }
};
