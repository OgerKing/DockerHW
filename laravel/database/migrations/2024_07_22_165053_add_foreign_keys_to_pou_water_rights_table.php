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
        Schema::table('pou_water_rights', function (Blueprint $table) {
            $table->foreign(['priority_date_id'], 'fk_pouwr_priordate')->references(['id'])->on('priority_dates');
            $table->foreign(['water_right_id'], 'fk_pouwr_water_right_id')->references(['id'])->on('water_rights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pou_water_rights', function (Blueprint $table) {
            $table->dropForeign('fk_pouwr_priordate');
            $table->dropForeign('fk_pouwr_water_right_id');
        });
    }
};
