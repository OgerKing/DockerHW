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
        Schema::table('subfile_persons', function (Blueprint $table) {
            $table->foreign(['subfile_id'], 'fk_subfil854962')->references(['id'])->on('subfiles');
            $table->foreign(['contact_email_id'], 'fk_subfile_persons_contact_email_id')->references(['id'])->on('contact_emails');
            $table->foreign(['contact_telephone_id'], 'fk_subfile_persons_contact_telephone_id')->references(['id'])->on('contact_telephones');
            $table->foreign(['person_interest_type_id'], 'fk_subfile_persons_person_interest_type_id')->references(['id'])->on('person_interest_types');
            $table->foreign(['person_legal_interest_type_id'], 'fk_subfile_persons_person_legal_interest_type_id')->references(['id'])->on('person_legal_interest_types');
            $table->foreign(['person_status_id'], 'fk_subfile_persons_person_status_id')->references(['id'])->on('person_statuses');
            $table->foreign(['person_type_id'], 'fk_subfile_persons_person_type_id')->references(['id'])->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfile_persons', function (Blueprint $table) {
            $table->dropForeign('fk_subfil854962');
            $table->dropForeign('fk_subfile_persons_contact_email_id');
            $table->dropForeign('fk_subfile_persons_contact_telephone_id');
            $table->dropForeign('fk_subfile_persons_person_interest_type_id');
            $table->dropForeign('fk_subfile_persons_person_legal_interest_type_id');
            $table->dropForeign('fk_subfile_persons_person_status_id');
            $table->dropForeign('fk_subfile_persons_person_type_id');
        });
    }
};
