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
        Schema::create('subfile_persons', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('subfile_id')->index();
            $table->timestamp('case_close_date')->nullable();
            $table->string('case_number', 32);
            $table->timestamp('case_open_date')->nullable();
            $table->char('category', 2);
            $table->bigInteger('cert_mail');
            $table->string('cid_no', 100);
            $table->bigInteger('contact_email_id')->index();
            $table->bigInteger('court_id')->index();
            $table->bigInteger('contact_telephone_id')->index();
            $table->string('created_by', 64);
            $table->bigInteger('court_number');
            $table->boolean('is_defendant')->nullable();
            $table->boolean('is_permittee')->nullable();
            $table->bigInteger('defendant_type_id')->index();
            $table->tinyInteger('is_case_number_invalid')->nullable();
            $table->bigInteger('mailing_address_id')->index();
            $table->string('owner_set', 25);
            $table->bigInteger('person_interest_type_id')->index();
            $table->bigInteger('person_legal_interest_type_id')->index();
            $table->bigInteger('person_status_id')->index();
            $table->bigInteger('person_type_id')->index();
            $table->timestamps();
            $table->string('updated_by', 64);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subfile_persons');
    }
};
