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
        Schema::create('package_subscriptions', function (Blueprint $table) {
            $table->bigincrements('subscription_id');
            $table->integer('package_id');
            $table->integer('business_id');
            $table->integer('staff_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('code');
            $table->string('duration');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->float('total_cost');
            $table->integer('status');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_subscriptions');
    }
};
