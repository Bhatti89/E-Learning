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
        Schema::create('multiplepages', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('adminLesson_id')->constrained('multiplelessons')->onDelete('cascade');
            $table->string('title');
           
            // Add a column for page type
            $table->enum('page_type', [
                'plain_html',
                'single_text_field',
                'single_text_area',
                'quiz_4_matching',
                'quiz_image_four_choices',
                'quiz_4_choices',
            ]);

            $table->integer('order')->default(0); // Add an order column


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplepages');
    }
};
