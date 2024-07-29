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
        Schema::create('defendant_documents', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('document_title', 100);
            $table->bigInteger('subfile_id')->index();
            $table->dateTime('document_filing_date');
            $table->string('attachment_link', 120);
            $table->bigInteger('defendant_document_type_id')->index('defendant_document_type_id_index');
            $table->tinyInteger('defendant')->nullable();
            $table->string('docket_id', 10);
            $table->timestamp('created_at')->nullable();
            $table->string('created_by', 64);
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by', 64);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defendant_documents');
    }
};
