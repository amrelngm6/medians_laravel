<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hr_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->integer('saturday')->default(0);
            $table->integer('sunday')->default(0);
            $table->integer('monday')->default(0);
            $table->integer('tuesday')->default(0);
            $table->integer('wednesday')->default(0);
            $table->integer('thursday')->default(0);
            $table->integer('friday')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('hr_shifts');
    }
};
