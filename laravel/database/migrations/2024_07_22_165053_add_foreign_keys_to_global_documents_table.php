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
        Schema::table('global_documents', function (Blueprint $table) {
            $table->foreign(['global_document_type_id'])->references(['id'])->on('global_document_types');
            $table->foreign(['subfile_id'])->references(['id'])->on('subfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('global_documents', function (Blueprint $table) {
            $table->dropForeign('global_documents_global_document_type_id_foreign');
            $table->dropForeign('global_documents_subfile_id_foreign');
        });
    }
};
