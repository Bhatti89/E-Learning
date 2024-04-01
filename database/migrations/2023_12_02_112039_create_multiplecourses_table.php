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
        Schema::create('multiplecourses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminCourse_id')->constrained('adminmains')->onDelete('cascade');
            $table->string("courseName",30);
            $table->string("courseTitle",30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplecourses');
    }
};
