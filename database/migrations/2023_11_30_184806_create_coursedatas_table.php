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
        Schema::create('coursedatas', function (Blueprint $table) {
            $table->id();
            $table->string("coursename",30);
            $table->string("date",30);
            $table->string("time",30);
            $table->string("link",100);
            $table->string("section",30);
            $table->string("unit",30);
            $table->string("lesson",30);
            $table->string("description",300);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursedatas');
    }
};
