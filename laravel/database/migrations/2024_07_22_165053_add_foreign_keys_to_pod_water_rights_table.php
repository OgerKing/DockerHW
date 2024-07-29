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
        Schema::table('pod_water_rights', function (Blueprint $table) {
            $table->foreign(['priority_date_id'], 'fk_priori118248')->references(['id'])->on('priority_dates');
            $table->foreign(['pod_id'])->references(['id'])->on('pods');
            $table->foreign(['water_right_id'])->references(['id'])->on('water_rights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pod_water_rights', function (Blueprint $table) {
            $table->dropForeign('fk_priori118248');
            $table->dropForeign('pod_water_rights_pod_id_foreign');
            $table->dropForeign('pod_water_rights_water_right_id_foreign');
        });
    }
};
