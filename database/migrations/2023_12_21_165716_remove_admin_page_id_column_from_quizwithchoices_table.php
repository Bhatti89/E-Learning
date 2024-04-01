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
        Schema::table('quizwithchoices', function (Blueprint $table) {
            
            Schema::table('quizwithchoices', function (Blueprint $table) 
            {

                $table->dropForeign(['adminPage_id']);
            });
    
            // Remove the adminPage_id column
            Schema::table('quizwithchoices', function (Blueprint $table) {
                $table->dropColumn('adminPage_id');
            });

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quizwithchoices', function (Blueprint $table) {
            //
        });
    }
};
