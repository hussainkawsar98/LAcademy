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
        Schema::create('course_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            $table->string('orderID')->nullable();
            $table->date('orderDate');
            $table->decimal('amount', 10,2);
            $table->decimal('discount', 10,2)->default(0);
            $table->decimal('net_amount', 10,2)->default(0);
            $table->enum('status', ['Active', 'Inactive', 'Off', 'Completed'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_orders');
    }
};
