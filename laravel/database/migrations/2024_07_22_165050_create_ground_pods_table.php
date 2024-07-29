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
        Schema::create('ground_pods', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('arcgis_processing_id')->index('ground_pods_arcgis_procss_id_index');
            $table->bigInteger('pod_id')->index();
            $table->string('ground_pod_source_text', 2000);
            $table->string('pump_code', 6);
            $table->string('power_source', 11);
            $table->string('source_ug', 10);
            $table->double('diameter_in');
            $table->string('dom_map_label', 50);
            $table->string('pod_wuc', 3);
            $table->timestamp('log_filed')->nullable();
            $table->tinyInteger('outside_adjudication_section')->nullable();
            $table->bigInteger('irrigation_id')->index('ground_pods_irrigation_id index');
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
        Schema::dropIfExists('ground_pods');
    }
};
