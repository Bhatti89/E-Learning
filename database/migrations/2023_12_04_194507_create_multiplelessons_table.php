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
        Schema::create('multiplelessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminUnit_id')->constrained('multipleunits')->onDelete('cascade');
            $table->string('lessonName');
            $table->text('lessonTitle');
            $table->text('description');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplelessons');
    }
};
