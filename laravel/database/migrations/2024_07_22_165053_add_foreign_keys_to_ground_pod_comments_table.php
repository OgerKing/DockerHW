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
        Schema::table('ground_pod_comments', function (Blueprint $table) {
            $table->foreign(['ground_pod_id'])->references(['id'])->on('ground_pods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ground_pod_comments', function (Blueprint $table) {
            $table->dropForeign('ground_pod_comments_ground_pod_id_foreign');
        });
    }
};
