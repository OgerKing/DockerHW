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
        Schema::table('defendant_documents', function (Blueprint $table) {
            $table->foreign(['defendant_document_type_id'], 'fk_defend386589')->references(['id'])->on('defendant_documents_types');
            $table->foreign(['subfile_id'], 'subfile_id_foreign')->references(['id'])->on('subfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('defendant_documents', function (Blueprint $table) {
            $table->dropForeign('fk_defend386589');
            $table->dropForeign('subfile_id_foreign');
        });
    }
};
