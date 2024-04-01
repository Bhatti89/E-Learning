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
        Schema::create('quizmultiplechoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminPage_id')->constrained('multiplepages')->onDelete('cascade');
            $table->string('page_type');
            $table->longText('Title');
            $table->longText('html_code');
            $table->string('choice1');
            $table->string('choice2');
            $table->string('choice3');
            $table->string('choice4');
            $table->integer('order')->default(0);
            $table->integer('Answer')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizmultiplechoices');
    }
};
