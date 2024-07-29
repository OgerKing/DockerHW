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
        Schema::create('pou_comments', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('pou_id')->index('poucommnt_pou_id_index');
            $table->string('work_notes', 100);
            $table->string('pou_comment_type', 36);
            $table->date('pou_comment_date');
            $table->string('pou_comment_resource', 64);
            $table->string('pou_comment_description', 250);
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
        Schema::dropIfExists('pou_comments');
    }
};
