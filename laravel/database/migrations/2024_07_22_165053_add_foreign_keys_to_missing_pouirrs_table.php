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
        Schema::table('missing_pouirrs', function (Blueprint $table) {
            $table->foreign(['pou_irrigation_id'], 'fk_pou_ir390664')->references(['id'])->on('pou_irrigations');
            $table->foreign(['arcgis_processing_id'], 'mp_arcgis_processing_id')->references(['id'])->on('arcgis_processing');
            $table->foreign(['bureau_id'], 'mp_bureau_id_foreign')->references(['id'])->on('bureaus');
            $table->foreign(['city_id'], 'mp_city_id_foreign')->references(['id'])->on('cities');
            $table->foreign(['county_id'], 'mp_county_id_foreign')->references(['id'])->on('counties');
            $table->foreign(['court_id'], 'mp_court_id_foreign')->references(['id'])->on('courts');
            $table->foreign(['grant_id'], 'mp_grant_id_foreign')->references(['id'])->on('grants');
            $table->foreign(['pou_comments_id'], 'mp_pou_comments_id_foreign')->references(['id'])->on('pou_comments');
            $table->foreign(['pou_status_id'], 'mp_pou_status_id_foreign')->references(['id'])->on('pou_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('missing_pouirrs', function (Blueprint $table) {
            $table->dropForeign('fk_pou_ir390664');
            $table->dropForeign('mp_arcgis_processing_id');
            $table->dropForeign('mp_bureau_id_foreign');
            $table->dropForeign('mp_city_id_foreign');
            $table->dropForeign('mp_county_id_foreign');
            $table->dropForeign('mp_court_id_foreign');
            $table->dropForeign('mp_grant_id_foreign');
            $table->dropForeign('mp_pou_comments_id_foreign');
            $table->dropForeign('mp_pou_status_id_foreign');
        });
    }
};
