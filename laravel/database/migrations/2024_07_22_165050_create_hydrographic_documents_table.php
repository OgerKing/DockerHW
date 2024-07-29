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
        Schema::create('hydrographic_documents', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('subfile_id')->index();
            $table->string('hydrographic_document_title', 64);
            $table->dateTime('hydrographic_document_filing_date');
            $table->string('attachment_link', 120);
            $table->bigInteger('hydrographic_document_type_id')->index();
            $table->string('hydrographic_document_owner', 64);
            $table->string('hydrographic_document_owner_status', 12);
            $table->string('hydrographic_document_owner_type', 20);
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
        Schema::dropIfExists('hydrographic_documents');
    }
};
