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
        Schema::create('unitexams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adminUnit_id')->constrained('multipleunits')->onDelete('cascade');
            $table->string('title');
            $table->string('image_path')->nullable(); // Assuming you'll store the path to the uploaded image
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unitexams');
    }
};
