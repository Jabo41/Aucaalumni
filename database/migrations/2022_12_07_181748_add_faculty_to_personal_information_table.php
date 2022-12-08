<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacultyToPersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_information', function (Blueprint $table) {
            $table->foreignId('faculty')->nullable()
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_information', function (Blueprint $table) {
            $table->dropConstrainedForeignId('faculty');
            $table->dropColumn('faculty_id');
        });
    }
}
