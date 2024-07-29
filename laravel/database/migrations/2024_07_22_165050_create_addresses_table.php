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
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('addr1', 30);
            $table->string('city_hl', 20);
            $table->char('state', 2);
            $table->string('zip', 10);
            $table->tinyInteger('addr_invalid')->nullable();
            $table->dateTime('addr_update');
            $table->string('care_of', 50);
            $table->string('home_phn_hl', 14);
            $table->string('cell_phn_hl', 14);
            $table->string('work_phn_hl', 14);
            $table->string('e_mail_hl', 50);
            $table->string('p_addr_1', 30);
            $table->string('p_city_hl', 20);
            $table->char('p_state', 2);
            $table->string('p_zip', 10);
            $table->tinyInteger('phys_addr_invalid')->nullable();
            $table->bigInteger('label_id_access');
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
        Schema::dropIfExists('addresses');
    }
};
