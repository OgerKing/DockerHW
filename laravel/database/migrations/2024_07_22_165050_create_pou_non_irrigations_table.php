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
        Schema::create('pou_non_irrigations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('pou_id')->nullable()->index('pounonirr_pou');
            $table->bigInteger('arcgis_processing_id')->nullable()->index('pounonirr_arcgis');
            $table->string('map_id_desc', 60);
            $table->char('zone', 1);
            $table->bigInteger('r_id_access');
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
        Schema::dropIfExists('pou_non_irrigations');
    }
};
