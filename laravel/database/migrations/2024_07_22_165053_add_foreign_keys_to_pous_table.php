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
        Schema::table('pous', function (Blueprint $table) {
            $table->foreign(['arcgis_processing_id'], 'fk_arcGIS')->references(['id'])->on('arcgis_processing');
            $table->foreign(['pou_status_id'], 'pou_water_rights_pou_status_id_foreign')->references(['id'])->on('pou_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pous', function (Blueprint $table) {
            $table->dropForeign('fk_arcGIS');
            $table->dropForeign('pou_water_rights_pou_status_id_foreign');
        });
    }
};
