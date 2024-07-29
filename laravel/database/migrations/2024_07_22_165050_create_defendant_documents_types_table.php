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
        Schema::create('defendant_documents_types', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->char('defendant_document_type_code', 2);
            $table->string('defendant_document_type_description', 64);
            $table->tinyInteger('offer_exclude')->nullable();
            $table->string('report', 64);
            $table->bigInteger('sort');
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
        Schema::dropIfExists('defendant_documents_types');
    }
};
