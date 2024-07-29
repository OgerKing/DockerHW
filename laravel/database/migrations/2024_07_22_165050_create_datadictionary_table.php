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
        Schema::create('datadictionary', function (Blueprint $table) {
            $table->bigInteger('ID#')->nullable();
            $table->string('TABLE_NAME')->nullable();
            $table->string('FIELD_NAME')->nullable();
            $table->string('RECOMMENDED_LABEL_S_', 1005)->nullable();
            $table->string('FIELD_DATA_TYPE')->nullable();
            $table->mediumText('FIELD_DESCRIPTION')->nullable();
            $table->string('IS_FK')->nullable();
            $table->string('IS_PK')->nullable();
            $table->string('NULL_OPTION')->nullable();
            $table->string('ACCEPTABLE ENTRIES')->nullable();
            $table->mediumText('TOOL_TIPS')->nullable();
            $table->string('f12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadictionary');
    }
};
