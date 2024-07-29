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
        Schema::table('adjudications', function (Blueprint $table) {
            $table->foreign(['adjudication_status_id'], 'fk_adjs_adjstatus')->references(['id'])->on('adjudication_statuses');
            $table->foreign(['bureau_id'], 'fk_adjs_bureau')->references(['id'])->on('bureaus');
            $table->foreign(['adjudication_district_id'], 'fk_adjs_district')->references(['id'])->on('adjudication_districts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adjudications', function (Blueprint $table) {
            $table->dropForeign('fk_adjs_adjstatus');
            $table->dropForeign('fk_adjs_bureau');
            $table->dropForeign('fk_adjs_district');
        });
    }
};
