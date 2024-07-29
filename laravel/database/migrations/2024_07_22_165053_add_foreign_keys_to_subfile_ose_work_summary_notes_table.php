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
        Schema::table('subfile_ose_work_summary_notes', function (Blueprint $table) {
            $table->foreign(['subfile_id'], 'subfile_ose_work_summary_notes_ibfk_7')->references(['id'])->on('subfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfile_ose_work_summary_notes', function (Blueprint $table) {
            $table->dropForeign('subfile_ose_work_summary_notes_ibfk_7');
        });
    }
};
