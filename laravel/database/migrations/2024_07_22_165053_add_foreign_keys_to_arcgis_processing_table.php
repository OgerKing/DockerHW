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
        Schema::table('arcgis_processing', function (Blueprint $table) {
            $table->foreign(['adjudication_section_id'], 'fk_arcgis_adjud_section_id')->references(['id'])->on('adjudication_sections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('arcgis_processing', function (Blueprint $table) {
            $table->dropForeign('fk_arcgis_adjud_section_id');
        });
    }
};
