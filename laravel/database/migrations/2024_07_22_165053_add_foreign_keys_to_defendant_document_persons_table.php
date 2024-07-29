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
        Schema::table('defendant_document_persons', function (Blueprint $table) {
            $table->foreign(['defendant_document_id'], 'fk_ddp_defendant_document_id')->references(['id'])->on('defendant_documents');
            $table->foreign(['person_id'], 'fk_ddp_person_id')->references(['id'])->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('defendant_document_persons', function (Blueprint $table) {
            $table->dropForeign('fk_ddp_defendant_document_id');
            $table->dropForeign('fk_ddp_person_id');
        });
    }
};
