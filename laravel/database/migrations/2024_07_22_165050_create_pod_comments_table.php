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
        Schema::create('pod_comments', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('pod_id')->index();
            $table->date('pod_comment_date');
            $table->string('pod_comment_description', 250);
            $table->string('pod_comment_resource', 64);
            $table->bigInteger('pod_comment_type_id')->index('pod_comment_type_id_index');
            $table->string('work_notes', 100);
            $table->timestamp('created_at')->nullable();
            $table->string('created_by', 64);
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by', 64);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pod_comments');
    }
};
