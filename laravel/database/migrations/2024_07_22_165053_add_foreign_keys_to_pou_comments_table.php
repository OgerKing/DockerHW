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
        Schema::table('pou_comments', function (Blueprint $table) {
            $table->foreign(['pou_id'], 'fk_poucommnt_pou_id')->references(['id'])->on('pous');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pou_comments', function (Blueprint $table) {
            $table->dropForeign('fk_poucommnt_pou_id');
        });
    }
};
