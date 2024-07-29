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
        Schema::table('subfile_owner_histories', function (Blueprint $table) {
            $table->foreign(['contact_email_id'], 'subfile_owner_histories_ibfk_1')->references(['id'])->on('contact_emails');
            $table->foreign(['contact_telephone_id'], 'subfile_owner_histories_ibfk_2')->references(['id'])->on('contact_telephones');
            $table->foreign(['defendant_type_id'], 'subfile_owner_histories_ibfk_3')->references(['id'])->on('defendant_types');
            $table->foreign(['address_id'], 'subfile_owner_histories_ibfk_4')->references(['id'])->on('addresses');
            $table->foreign(['person_id'], 'subfile_owner_histories_ibfk_5')->references(['id'])->on('persons');
            $table->foreign(['person_interest_type_id'], 'subfile_owner_histories_ibfk_6')->references(['id'])->on('person_interest_types');
            $table->foreign(['subfile_persons_id'], 'subfile_owner_histories_ibfk_7')->references(['id'])->on('subfile_persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subfile_owner_histories', function (Blueprint $table) {
            $table->dropForeign('subfile_owner_histories_ibfk_1');
            $table->dropForeign('subfile_owner_histories_ibfk_2');
            $table->dropForeign('subfile_owner_histories_ibfk_3');
            $table->dropForeign('subfile_owner_histories_ibfk_4');
            $table->dropForeign('subfile_owner_histories_ibfk_5');
            $table->dropForeign('subfile_owner_histories_ibfk_6');
            $table->dropForeign('subfile_owner_histories_ibfk_7');
        });
    }
};
