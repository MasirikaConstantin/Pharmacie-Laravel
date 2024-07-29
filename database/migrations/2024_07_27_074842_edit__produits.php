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
        // Remove the unique constraint from the 'slug' column
        Schema::table('produits', function (Blueprint $table) {
            $table->dropUnique(['slug']);
        });

        // Add the 'slug' column back without the unique constraint
        Schema::table('produits', function (Blueprint $table) {
            $table->string('slug')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Restore the unique constraint to the 'slug' column
        Schema::table('produits', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }
};
