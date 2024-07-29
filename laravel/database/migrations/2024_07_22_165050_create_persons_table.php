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
        Schema::create('persons', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('address_id')->index();
            $table->tinyInteger('assoc')->nullable();
            $table->bigInteger('attorney_id')->index('persons_atty_id_index');
            $table->tinyInteger('authorized_agent')->nullable();
            $table->bigInteger('bureau_id')->index();
            $table->tinyInteger('caretaker')->nullable();
            $table->bigInteger('contact_email_id')->index();
            $table->bigInteger('contact_telephone_id')->index();
            $table->bigInteger('court_id')->index();
            $table->string('department', 50);
            $table->string('division', 50);
            $table->string('entity_name', 64);
            $table->string('first_name', 50);
            $table->tinyInteger('former')->nullable();
            $table->smallInteger('gov');
            $table->tinyInteger('individual')->nullable();
            $table->tinyInteger('is_deceased')->nullable();
            $table->string('last_name', 50);
            $table->string('middle_name', 50);
            $table->bigInteger('p_idaccess');
            $table->bigInteger('p_sort');
            $table->bigInteger('person_alias_id')->index();
            $table->timestamp('person_end_date')->nullable();
            $table->smallInteger('person_entity');
            $table->timestamp('person_start_date')->nullable();
            $table->bigInteger('person_status_id')->index();
            $table->bigInteger('person_type_id')->index();
            $table->string('sovereign', 50);
            $table->string('special_handling_instructions', 250);
            $table->string('suffix', 15);
            $table->tinyInteger('verified')->nullable();
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
        Schema::dropIfExists('persons');
    }
};
