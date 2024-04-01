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
        Schema::create('page_quiz4_matchings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminLesson_id')->constrained('multiplelessons')->onDelete('cascade');
            $table->string('page_type')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('left_item1');
            $table->string('right_item1');
            $table->string('left_item2');
            $table->string('right_item2');
            $table->string('left_item3');
            $table->string('right_item3');
            $table->string('left_item4');
            $table->string('right_item4');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_quiz4_matchings');
    }
};
