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
        Schema::create('defendant_document_persons', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('defendant_document_id')->index('ddp_defendant_document_id_index');
            $table->bigInteger('person_id')->index('ddp_person_id_index');
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
        Schema::dropIfExists('defendant_document_persons');
    }
};
