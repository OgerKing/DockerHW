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
        Schema::table('surface_pods', function (Blueprint $table) {
            $table->foreign(['arcgis_processing_id'], 'fk_sp_arcGIS_process_id')->references(['id'])->on('arcgis_processing');
            $table->foreign(['pod_id'], 'fk_sp_pod_id')->references(['id'])->on('pods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surface_pods', function (Blueprint $table) {
            $table->dropForeign('fk_sp_arcGIS_process_id');
            $table->dropForeign('fk_sp_pod_id');
        });
    }
};
