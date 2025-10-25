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
        Schema::table('posts', function (Blueprint $table) {
            // Add index on category_id for faster joins
            $table->index('category_id');
            
            // Add index on is_published for faster filtering
            $table->index('is_published');
            
            // Add index on published_at for faster sorting
            $table->index('published_at');
            
            // Add composite index for common queries
            $table->index(['is_published', 'published_at']);
        });

        Schema::table('categories', function (Blueprint $table) {
            // Add index on is_active for faster filtering
            $table->index('is_active');
        });

        Schema::table('sessions', function (Blueprint $table) {
            // Add index on last_activity for session cleanup
            $table->index('last_activity');
        });

        Schema::table('cache', function (Blueprint $table) {
            // Add index on expiration for cache cleanup
            $table->index('expiration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex(['category_id']);
            $table->dropIndex(['is_published']);
            $table->dropIndex(['published_at']);
            $table->dropIndex(['is_published', 'published_at']);
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
        });

        Schema::table('sessions', function (Blueprint $table) {
            $table->dropIndex(['last_activity']);
        });

        Schema::table('cache', function (Blueprint $table) {
            $table->dropIndex(['expiration']);
        });
    }
};
