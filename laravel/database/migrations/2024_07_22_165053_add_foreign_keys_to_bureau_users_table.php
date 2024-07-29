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
        Schema::table('bureau_users', function (Blueprint $table) {
            $table->foreign(['bureau_id'], 'fk_bu_bureau')->references(['id'])->on('bureaus');
            $table->foreign(['gis_duplicate_id'], 'fk_bu_gis_duplicate_id_foreign')->references(['id'])->on('gis_duplicates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bureau_users', function (Blueprint $table) {
            $table->dropForeign('fk_bu_bureau');
            $table->dropForeign('fk_bu_gis_duplicate_id_foreign');
        });
    }
};
