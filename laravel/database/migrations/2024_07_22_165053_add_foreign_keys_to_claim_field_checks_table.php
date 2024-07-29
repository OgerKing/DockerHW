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
        Schema::table('claim_field_checks', function (Blueprint $table) {
            $table->foreign(['field_work_id'])->references(['id'])->on('field_works');
            $table->foreign(['resource_id'], 'fk_resour731028')->references(['id'])->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('claim_field_checks', function (Blueprint $table) {
            $table->dropForeign('claim_field_checks_field_work_id_foreign');
            $table->dropForeign('fk_resour731028');
        });
    }
};
