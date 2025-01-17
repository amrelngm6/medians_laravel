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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('project_id')->primary();
            $table->string('name', 191);
            $table->text('description')->nullable();
            $table->integer('client_id');
            $table->integer('is_paid');
            $table->date('start_date');
            $table->date('deadline_date')->nullable();
            $table->dateTime('finished_date')->nullable();
            $table->decimal('total_cost', 15)->nullable();
            $table->integer('status_id')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
