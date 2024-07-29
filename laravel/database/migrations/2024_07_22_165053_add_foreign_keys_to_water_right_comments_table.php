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
        Schema::table('water_right_comments', function (Blueprint $table) {
            $table->foreign(['water_right_comment_category_id'], 'fk_wr_comments_cat')->references(['id'])->on('water_right_comment_categories');
            $table->foreign(['water_right_id'], 'fk_wr_comments_water_right')->references(['id'])->on('water_rights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('water_right_comments', function (Blueprint $table) {
            $table->dropForeign('fk_wr_comments_cat');
            $table->dropForeign('fk_wr_comments_water_right');
        });
    }
};
