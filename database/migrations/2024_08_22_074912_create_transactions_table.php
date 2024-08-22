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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('Transaction_ID')->nullable();
            $table->decimal('amount', 10,2)->default(0);
            $table->date('Payment_date');
            $table->enum('payment_type', ['Bkash', 'Nagad', 'Cash'])->default('Cash');
            $table->enum('status', ['Paid', 'Due', 'Partial'])->default('Paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
