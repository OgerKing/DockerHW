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
        Schema::table('ground_pods', function (Blueprint $table) {
            $table->foreign(['arcgis_processing_id'], 'fk_ground_pods_arcgis_procss_id')->references(['id'])->on('arcgis_processing');
            $table->foreign(['irrigation_id'], 'fk_ground_pods_irrigation_id')->references(['id'])->on('irrigations');
            $table->foreign(['pod_id'], 'fk_ground_pods_pod_id')->references(['id'])->on('pods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ground_pods', function (Blueprint $table) {
            $table->dropForeign('fk_ground_pods_arcgis_procss_id');
            $table->dropForeign('fk_ground_pods_irrigation_id');
            $table->dropForeign('fk_ground_pods_pod_id');
        });
    }
};
