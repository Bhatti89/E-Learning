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
        $table->foreignId('adminPage_id')->constrained('multiplepages')->after('right_item'); 
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
