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
        Schema::table('pairmatchings', function (Blueprint $table) {
            Schema::table('pairmatchings', function (Blueprint $table) 
            {

                $table->dropForeign(['adminPage_id']);
            });
    
            // Remove the adminPage_id column
            Schema::table('pairmatchings', function (Blueprint $table) {
                $table->dropColumn('adminPage_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pairmatchings', function (Blueprint $table) {
            //
        });
    }
};
