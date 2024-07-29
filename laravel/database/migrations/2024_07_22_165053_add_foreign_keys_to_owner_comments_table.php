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
        Schema::table('owner_comments', function (Blueprint $table) {
            $table->foreign(['contact_email_id'])->references(['id'])->on('contact_emails');
            $table->foreign(['contact_telephone_id'])->references(['id'])->on('contact_telephones');
            $table->foreign(['person_id'])->references(['id'])->on('persons');
            $table->foreign(['person_status_id'])->references(['id'])->on('person_statuses');
            $table->foreign(['person_type_id'])->references(['id'])->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner_comments', function (Blueprint $table) {
            $table->dropForeign('owner_comments_contact_email_id_foreign');
            $table->dropForeign('owner_comments_contact_telephone_id_foreign');
            $table->dropForeign('owner_comments_person_id_foreign');
            $table->dropForeign('owner_comments_person_status_id_foreign');
            $table->dropForeign('owner_comments_person_type_id_foreign');
        });
    }
};
