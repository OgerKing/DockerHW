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
        Schema::table('court_cases', function (Blueprint $table) {
            $table->foreign(['court_id'], 'fk_ac_court')->references(['id'])->on('courts');
            $table->foreign(['court_judge_id'], 'fk_ac_court_judge')->references(['id'])->on('court_personnel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('court_cases', function (Blueprint $table) {
            $table->dropForeign('fk_ac_court');
            $table->dropForeign('fk_ac_court_judge');
        });
    }
};
