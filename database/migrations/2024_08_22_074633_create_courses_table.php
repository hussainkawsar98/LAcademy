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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('mentor_id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('course_code')->unique()->nullable();
            $table->decimal('fee', 10,2);
            $table->decimal('discount', 10,2)->default(0);
            $table->enum('status', ['Active', 'Inactive', 'Upcoming'])->default('Active');
            $table->date('start_date')->nullable();
            $table->integer('total_class')->default(0);
            $table->integer('total_days')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
