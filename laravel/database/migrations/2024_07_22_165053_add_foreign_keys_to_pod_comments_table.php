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
        Schema::table('pod_comments', function (Blueprint $table) {
            $table->foreign(['pod_comment_type_id'], 'fk_pod_comments_pod_comment_type')->references(['id'])->on('pod_comment_types');
            $table->foreign(['pod_id'], 'fk_pod_comments_pod_id')->references(['id'])->on('pods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pod_comments', function (Blueprint $table) {
            $table->dropForeign('fk_pod_comments_pod_comment_type');
            $table->dropForeign('fk_pod_comments_pod_id');
        });
    }
};
