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
        Schema::create('pods', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->char('s_type_cat', 1);
            $table->string('pod_name', 2000);
            $table->string('pod_subfile', 15);
            $table->string('pod_map_txt', 15);
            $table->string('pod_tract_txt', 15);
            $table->char('qtr_4th', 1);
            $table->char('qtr_16th', 1);
            $table->char('qtr_64th', 1);
            $table->string('sub_sec_txt', 15);
            $table->char('sec', 2);
            $table->char('tws', 3);
            $table->char('rng', 5);
            $table->double('x');
            $table->double('y');
            $table->string('xy_datum', 5);
            $table->string('xy_unit_of_measure', 5);
            $table->char('zone', 1);
            $table->string('map_id_desc', 60);
            $table->string('f_photo_nbr', 20);
            $table->smallInteger('well_define');
            $table->dateTime('pod_loc_date');
            $table->dateTime('pod_loc_time');
            $table->string('plss_description', 250);
            $table->smallInteger('crew_nbr');
            $table->string('point_qual', 10);
            $table->double('std_dev');
            $table->string('pod_basin', 3);
            $table->string('pod_nbr', 5);
            $table->string('pod_suffix', 10);
            $table->string('ose_file', 75);
            $table->string('pod_hl_txt', 100);
            $table->string('pod_field_no', 10);
            $table->string('lot', 24);
            $table->string('pod_location_description', 250);
            $table->string('waters_pod_id', 15);
            $table->bigInteger('s_id_access');
            $table->tinyInteger('selected')->nullable();
            $table->char('map_qtr', 2);
            $table->decimal('lat_deg', 8, 4);
            $table->decimal('lat_min', 8, 4);
            $table->decimal('lat_sec', 8, 4);
            $table->decimal('lon_deg', 8, 4);
            $table->decimal('lon_min', 8, 4);
            $table->decimal('lon_sec', 8, 4);
            $table->string('location_data_source', 2000);
            $table->bigInteger('arcgis_processing_id')->index();
            $table->bigInteger('pod_type_id')->index();
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
        Schema::dropIfExists('pods');
    }
};
