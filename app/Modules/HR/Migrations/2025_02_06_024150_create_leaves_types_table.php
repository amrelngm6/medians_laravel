<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hr_leave_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->integer('month_limit')->nullable();
            $table->integer('annual_limit')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('hr_leave_types');
    }
};
