<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hr_holidays', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('business_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('hr_holidays');
    }
};
