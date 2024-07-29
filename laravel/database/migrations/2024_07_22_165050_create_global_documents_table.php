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
        Schema::create('global_documents', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('subfile_id')->index();
            $table->string('global_document_title', 300);
            $table->dateTime('document_filing_date');
            $table->string('attachment_link', 120);
            $table->bigInteger('global_document_type_id')->index();
            $table->string('docket_id', 10);
            $table->string('global_desc', 2000);
            $table->bigInteger('global_id_access');
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
        Schema::dropIfExists('global_documents');
    }
};
