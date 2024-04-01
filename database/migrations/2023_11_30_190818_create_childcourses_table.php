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
        Schema::create('childcourses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id')->constrained('childrendatas')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('coursedatas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childcourses');
    }
};
