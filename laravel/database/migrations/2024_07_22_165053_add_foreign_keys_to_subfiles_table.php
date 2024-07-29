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
        Schema::table('subfiles', function (Blueprint $table) {
            $table->foreign(['subfile_adjudication_note_id'], 'fk_subfile_adj_note')->references(['id'])->on('subfile_adjudication_notes');
            $table->foreign(['adjudication_section_id'], 'fk_subfile_adj_sect')->references(['id'])->on('adjudication_sections');
            $table->foreign(['subfile_adjudication_status_id'], 'fk_subfile_adj_status')->references(['id'])->on('subfile_adjudication_statuses');
            $table->foreign(['file_location_id'], 'fk_subfile_file_loc')->references(['id'])->on('file_locations');
            $table->foreign(['field_check_note_id'], 'fk_subfile_fld_check_note')->references(['id'])->on('subfile_field_check_notes');
            $table->foreign(['ose_work_summary_note_id'], 'fk_subfile_ose_work_note')->references(['id'])->on('subfile_ose_work_summary_notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfiles', function (Blueprint $table) {
            $table->dropForeign('fk_subfile_adj_note');
            $table->dropForeign('fk_subfile_adj_sect');
            $table->dropForeign('fk_subfile_adj_status');
            $table->dropForeign('fk_subfile_file_loc');
            $table->dropForeign('fk_subfile_fld_check_note');
            $table->dropForeign('fk_subfile_ose_work_note');
        });
    }
};
