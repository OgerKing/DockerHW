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
        Schema::table('adjudication_subsections', function (Blueprint $table) {
            $table->foreign(['child_adjudication_subsection_id'], 'fk_ass_child_as_id_foreign')->references(['id'])->on('adjudication_subsections');
            $table->foreign(['parent_adjudication_subsection_id'], 'fk_ass_parent_as_id_foreign')->references(['id'])->on('adjudication_subsections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adjudication_subsections', function (Blueprint $table) {
            $table->dropForeign('fk_ass_child_as_id_foreign');
            $table->dropForeign('fk_ass_parent_as_id_foreign');
        });
    }
};
