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
        Schema::table('hydrographic_document_persons', function (Blueprint $table) {
            $table->foreign(['person_id'], 'fk_gdp__person_id')->references(['id'])->on('persons');
            $table->foreign(['hydrographic_document_id'], 'fk_hydrographic_document_id')->references(['id'])->on('hydrographic_documents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hydrographic_document_persons', function (Blueprint $table) {
            $table->dropForeign('fk_gdp__person_id');
            $table->dropForeign('fk_hydrographic_document_id');
        });
    }
};
