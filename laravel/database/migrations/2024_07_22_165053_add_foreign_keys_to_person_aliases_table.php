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
        Schema::table('person_aliases', function (Blueprint $table) {
            $table->foreign(['person_alias_type_id'])->references(['id'])->on('person_alias_types');
            $table->foreign(['person_id'])->references(['id'])->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('person_aliases', function (Blueprint $table) {
            $table->dropForeign('person_aliases_person_alias_type_id_foreign');
            $table->dropForeign('person_aliases_person_id_foreign');
        });
    }
};
