<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hr_attendance', function (Blueprint $table) {
            $table->id();
            $table->morphs('user');
            $table->datetime('check_in')->nullable();
            $table->datetime('check_out')->nullable();
            $table->decimal('hours_duration', 2)->default(0);
            $table->string('ip')->nullable();
            $table->string('platform')->nullable();
            $table->string('notes')->nullable();
            $table->integer('shift_id')->default(0);
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('hr_attendance');
    }
};
