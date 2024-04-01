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
        Schema::create('page_singletext_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminLesson_id')->constrained('multiplelessons')->onDelete('cascade');
            $table->string("page_type");
            $table->longText('Title');
            $table->longText('html_code');
            $table->longText('textFieldTitle');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_singletext_fields');
    }
};
