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
        Schema::table('water_rights', function (Blueprint $table) {
            $table->foreign(['subfile_id'], 'fk_subfil283864')->references(['id'])->on('subfiles');
            $table->foreign(['amount_category_id'])->references(['id'])->on('amount_categories');
            $table->foreign(['hs_recommendation_id'])->references(['id'])->on('hs_recommendations');
            $table->foreign(['water_right_use_id'])->references(['id'])->on('water_right_uses');
            $table->foreign(['water_source_id'])->references(['id'])->on('water_sources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('water_rights', function (Blueprint $table) {
            $table->dropForeign('fk_subfil283864');
            $table->dropForeign('water_rights_amount_category_id_foreign');
            $table->dropForeign('water_rights_hs_recommendation_id_foreign');
            $table->dropForeign('water_rights_water_right_use_id_foreign');
            $table->dropForeign('water_rights_water_source_id_foreign');
        });
    }
};
