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
        Schema::table('adjudication_documents', function (Blueprint $table) {
            $table->foreign(['adjudication_document_type_id'], 'fk_adjudication_documents_adjudication_document_type_id')->references(['id'])->on('adjudication_document_types');
            $table->foreign(['subfile_id'], 'fk_subfile_id_foreign')->references(['id'])->on('subfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adjudication_documents', function (Blueprint $table) {
            $table->dropForeign('fk_adjudication_documents_adjudication_document_type_id');
            $table->dropForeign('fk_subfile_id_foreign');
        });
    }
};
