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
        Schema::create('page_quiz_image_with4_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminLesson_id')->constrained('multiplelessons')->onDelete('cascade');
            $table->string('page_type');
            $table->longText('Title');
            $table->longText('html_code');
            $table->integer('order')->default(0);
            $table->integer('Answer')->default(0);
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');

            // Four URL inputs
            $table->string('url1');
            $table->string('url2');
            $table->string('url3');
            $table->string('url4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_quiz_image_with4_choices');
    }
};
