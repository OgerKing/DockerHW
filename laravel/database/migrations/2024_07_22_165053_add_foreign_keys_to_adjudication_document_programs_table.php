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
        Schema::table('adjudication_document_programs', function (Blueprint $table) {
            $table->foreign(['adjudication_id'])->references(['id'])->on('adjudications');
            $table->foreign(['bureau_id'])->references(['id'])->on('bureaus');
            $table->foreign(['court_id'])->references(['id'])->on('courts');
            $table->foreign(['adjudication_document_type_id'], 'adt1')->references(['id'])->on('adjudication_document_types');
            $table->foreign(['adjudication_document_id'], 'idx_adjDoc')->references(['id'])->on('adjudication_documents');
            $table->foreign(['court_case_id'], 'idx_adjDocP_court_case')->references(['id'])->on('court_cases');
            $table->foreign(['adjudication_sections_id'], 'idx_adsections')->references(['id'])->on('adjudication_sections');
            $table->foreign(['adjudication_status_id'], 'idx_ad_status')->references(['id'])->on('adjudication_statuses');
            $table->foreign(['adjudication_section_status_id'], 'idx_asstatus')->references(['id'])->on('adjudication_section_statuses');
            $table->foreign(['adjudication_section_type_id'], 'idx_ast')->references(['id'])->on('adjudication_section_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adjudication_document_programs', function (Blueprint $table) {
            $table->dropForeign('adjudication_document_programs_adjudication_id_foreign');
            $table->dropForeign('adjudication_document_programs_bureau_id_foreign');
            $table->dropForeign('adjudication_document_programs_court_id_foreign');
            $table->dropForeign('adt1');
            $table->dropForeign('idx_adjDoc');
            $table->dropForeign('idx_adjDocP_court_case');
            $table->dropForeign('idx_adsections');
            $table->dropForeign('idx_ad_status');
            $table->dropForeign('idx_asstatus');
            $table->dropForeign('idx_ast');
        });
    }
};
