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
        Schema::create('subfiles', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('adjudication_section_id')->index('sub_adjudication_section_id');
            $table->bigInteger('subfile_adjudication_note_id')->nullable()->index('sub_subfile_adjudication_note_id');
            $table->bigInteger('field_check_note_id')->nullable()->index('sub_field_check_note_id');
            $table->bigInteger('ose_work_summary_note_id')->nullable()->index('sub_ose_work_summary_note_id');
            $table->smallInteger('basin_nbr_hl');
            $table->string('basin_section_hl', 5);
            $table->double('batch');
            $table->bigInteger('file_location_id')->index('sub_file_location_id');
            $table->bigInteger('prev_sub_id');
            $table->dateTime('print_file');
            $table->boolean('selected');
            $table->bigInteger('sub_file_assigned_ose_attorney_person_id');
            $table->dateTime('sub_file_end_date');
            $table->string('sub_file_group', 250);
            $table->string('sub_file_hl_sfx', 10);
            $table->string('sub_file_hl_txt', 60);
            $table->integer('sub_file_map_nbr');
            $table->bigInteger('sub_file_parent_id');
            $table->decimal('sub_file_sort', 7, 3);
            $table->dateTime('sub_file_start_date');
            $table->integer('sub_file_type_nbr');
            $table->string('sub_file_var_sort', 20);
            $table->bigInteger('sub_id_access');
            $table->string('sub_unk_own', 10);
            $table->bigInteger('subfile_adjudication_status_id')->index('sub_subfile_adjudication_status_id');
            $table->integer('verified');
            $table->dateTime('wrats_status_date');
            $table->string('wrats_status_doc', 50);
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
        Schema::dropIfExists('subfiles');
    }
};
