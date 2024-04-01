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
        Schema::create('assign_courses', function (Blueprint $table) {
            $table->id();
            $table->string('s_id');
            $table->string('course_id');
            $table->string('semester');
            $table->string('year');
            $table->string('title');
            $table->string('f_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_courses');
    }
};
