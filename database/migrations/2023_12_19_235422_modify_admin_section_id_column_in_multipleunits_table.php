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
        Schema::table('multipleunits', function (Blueprint $table) {
            $table->dropForeign(['adminSection_id']);
        });

        // Drop the existing column
        Schema::table('multipleunits', function (Blueprint $table) {
            $table->dropColumn('adminSection_id');
        });

        // Add the modified column
        Schema::table('multipleunits', function (Blueprint $table) {
            $table->foreignId('adminSection_id')->constrained('multiplesections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('multipleunits', function (Blueprint $table) {
            //
        });
    }
};