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
        Schema::table('pods', function (Blueprint $table) {
            $table->foreign(['arcgis_processing_id'], 'fk_pods_arcgis_processing_id')->references(['id'])->on('arcgis_processing');
            $table->foreign(['pod_type_id'], 'fk_pods_pod_type_id')->references(['id'])->on('pod_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pods', function (Blueprint $table) {
            $table->dropForeign('fk_pods_arcgis_processing_id');
            $table->dropForeign('fk_pods_pod_type_id');
        });
    }
};
