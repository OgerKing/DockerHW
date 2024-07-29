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
        Schema::table('wrats_user_subfile_notifications', function (Blueprint $table) {
            $table->foreign(['file_location_id'], 'fk_file_l540685')->references(['id'])->on('file_locations');
            $table->foreign(['subfile_id'], 'fk_subfil643284')->references(['id'])->on('subfiles');
            $table->foreign(['wrats_user_id'], 'fk_wrats_808920')->references(['id'])->on('wrats_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wrats_user_subfile_notifications', function (Blueprint $table) {
            $table->dropForeign('fk_file_l540685');
            $table->dropForeign('fk_subfil643284');
            $table->dropForeign('fk_wrats_808920');
        });
    }
};
