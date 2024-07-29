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
        Schema::table('hydrographic_documents', function (Blueprint $table) {
            $table->foreign(['hydrographic_document_type_id'])->references(['id'])->on('hydrographic_document_types');
            $table->foreign(['subfile_id'])->references(['id'])->on('subfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hydrographic_documents', function (Blueprint $table) {
            $table->dropForeign('hydrographic_documents_hydrographic_document_type_id_foreign');
            $table->dropForeign('hydrographic_documents_subfile_id_foreign');
        });
    }
};
