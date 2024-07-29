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
        Schema::table('pou_irrigations', function (Blueprint $table) {
            $table->foreign(['arcgis_processing_id'], 'fk_pouirr_arcGIS')->references(['id'])->on('arcgis_processing');
            $table->foreign(['bureau_id'], 'fk_pouirr_bureau')->references(['id'])->on('bureaus');
            $table->foreign(['grant_id'], 'fk_pouirr_grant')->references(['id'])->on('grants');
            $table->foreign(['pou_id'], 'fk_pouirr_pou')->references(['id'])->on('pous');
            $table->foreign(['pou_status_id'], 'fk_pouirr_poustatus')->references(['id'])->on('pou_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pou_irrigations', function (Blueprint $table) {
            $table->dropForeign('fk_pouirr_arcGIS');
            $table->dropForeign('fk_pouirr_bureau');
            $table->dropForeign('fk_pouirr_grant');
            $table->dropForeign('fk_pouirr_pou');
            $table->dropForeign('fk_pouirr_poustatus');
        });
    }
};
