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
        Schema::table('court_case_adjudication_sections', function (Blueprint $table) {
            $table->foreign(['adjudication_section_id'], 'fk_ccas_adjudication_section')->references(['id'])->on('adjudication_sections');
            $table->foreign(['court_case_id'], 'fk_ccas_court')->references(['id'])->on('court_cases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('court_case_adjudication_sections', function (Blueprint $table) {
            $table->dropForeign('fk_ccas_adjudication_section');
            $table->dropForeign('fk_ccas_court');
        });
    }
};
