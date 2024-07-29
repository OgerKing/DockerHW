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
        Schema::table('subfile_claims', function (Blueprint $table) {
            $table->foreign(['subfile_id'], 'subfile_claims_ibfk_13')->references(['id'])->on('subfiles');
            $table->foreign(['attorney_id'], 'subfile_claims_ibfk_18')->references(['id'])->on('attorneys');
            $table->foreign(['claim_resolution_id'], 'subfile_claims_ibfk_19')->references(['id'])->on('claim_resolutions');
            $table->foreign(['claim_type_id'], 'subfile_claims_ibfk_2')->references(['id'])->on('claim_types');
            $table->foreign(['claim_status_id'], 'subfile_claims_ibfk_20')->references(['id'])->on('claim_statuses');
            $table->foreign(['resources_id'], 'subfile_claims_ibfk_9')->references(['id'])->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfile_claims', function (Blueprint $table) {
            $table->dropForeign('subfile_claims_ibfk_13');
            $table->dropForeign('subfile_claims_ibfk_18');
            $table->dropForeign('subfile_claims_ibfk_19');
            $table->dropForeign('subfile_claims_ibfk_2');
            $table->dropForeign('subfile_claims_ibfk_20');
            $table->dropForeign('subfile_claims_ibfk_9');
        });
    }
};
