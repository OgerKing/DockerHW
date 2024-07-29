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
        Schema::table('report_criterias', function (Blueprint $table) {
            $table->foreign(['report_id'], 'report_criteria_ibfk_1')->references(['id'])->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report_criterias', function (Blueprint $table) {
            $table->dropForeign('report_criteria_ibfk_1');
        });
    }
};
