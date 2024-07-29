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
        Schema::table('global_document_persons', function (Blueprint $table) {
            $table->foreign(['global_document_id'], 'fk_gdp_global_document_id')->references(['id'])->on('global_documents');
            $table->foreign(['person_id'], 'fk_gdp_person_id')->references(['id'])->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('global_document_persons', function (Blueprint $table) {
            $table->dropForeign('fk_gdp_global_document_id');
            $table->dropForeign('fk_gdp_person_id');
        });
    }
};
