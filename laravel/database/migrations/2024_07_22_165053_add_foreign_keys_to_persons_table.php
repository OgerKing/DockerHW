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
        Schema::table('persons', function (Blueprint $table) {
            $table->foreign(['attorney_id'], 'fk_atty_i016999')->references(['id'])->on('attorneys');
            $table->foreign(['address_id'])->references(['id'])->on('addresses');
            $table->foreign(['bureau_id'])->references(['id'])->on('bureaus');
            $table->foreign(['contact_email_id'])->references(['id'])->on('contact_emails');
            $table->foreign(['contact_telephone_id'])->references(['id'])->on('contact_telephones');
            $table->foreign(['court_id'])->references(['id'])->on('courts');
            $table->foreign(['person_alias_id'])->references(['id'])->on('person_aliases');
            $table->foreign(['person_status_id'])->references(['id'])->on('person_statuses');
            $table->foreign(['person_type_id'])->references(['id'])->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('persons', function (Blueprint $table) {
            $table->dropForeign('fk_atty_i016999');
            $table->dropForeign('persons_address_id_foreign');
            $table->dropForeign('persons_bureau_id_foreign');
            $table->dropForeign('persons_contact_email_id_foreign');
            $table->dropForeign('persons_contact_telephone_id_foreign');
            $table->dropForeign('persons_court_id_foreign');
            $table->dropForeign('persons_person_alias_id_foreign');
            $table->dropForeign('persons_person_status_id_foreign');
            $table->dropForeign('persons_person_type_id_foreign');
        });
    }
};
