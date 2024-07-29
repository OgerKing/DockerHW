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
        Schema::table('adjudication_sections', function (Blueprint $table) {
            $table->foreign(['adjudication_id'], 'fk_as_adjid_foreign')->references(['id'])->on('adjudications');
            $table->foreign(['water_source_id'], 'fk_as_hydroboundtype')->references(['id'])->on('water_sources');
            $table->foreign(['adjudication_section_status_id'], 'fk_as_stat')->references(['id'])->on('adjudication_section_statuses');
            $table->foreign(['adjudication_section_type_id'], 'fk_as_type')->references(['id'])->on('adjudication_section_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adjudication_sections', function (Blueprint $table) {
            $table->dropForeign('fk_as_adjid_foreign');
            $table->dropForeign('fk_as_hydroboundtype');
            $table->dropForeign('fk_as_stat');
            $table->dropForeign('fk_as_type');
        });
    }
};
