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
        Schema::table('subfile_user_watch', function (Blueprint $table) {
            $table->foreign(['subfile_id'], 'fk_suw_subfile')->references(['id'])->on('subfiles');
            $table->foreign(['wrats_user_id'], 'fk_suw_user')->references(['id'])->on('wrats_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfile_user_watch', function (Blueprint $table) {
            $table->dropForeign('fk_suw_subfile');
            $table->dropForeign('fk_suw_user');
        });
    }
};
