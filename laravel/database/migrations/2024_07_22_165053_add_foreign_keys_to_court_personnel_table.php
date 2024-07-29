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
        Schema::table('court_personnel', function (Blueprint $table) {
            $table->foreign(['court_id'], 'fk_cp_court')->references(['id'])->on('courts');
            $table->foreign(['court_role_id'], 'fk_cp_court_role')->references(['id'])->on('court_roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('court_personnel', function (Blueprint $table) {
            $table->dropForeign('fk_cp_court');
            $table->dropForeign('fk_cp_court_role');
        });
    }
};
