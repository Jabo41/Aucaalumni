<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('faculty');
            $table->text('bio');
            $table->string('current_employer')->nullable();
            $table->string('self_employed')->nullable();
            $table->string('profession')->nullable();
            $table->string('latest_education_level')->nullable();
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}
