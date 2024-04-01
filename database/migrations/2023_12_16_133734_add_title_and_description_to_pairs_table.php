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
        Schema::table('Pairs', function (Blueprint $table) 
        {
        // $table->foreignId('adminPage_id')->constrained('multiplepages')->onDelete('cascade')->after('id');
        $table->string('title')->nullable()->after('id');
        $table->text('description')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Pair', function (Blueprint $table) {
            //
        });
    }
};
