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
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('name_extention');
            $table->string('ciizenship');
            $table->string('civil_status');
            $table->string('gender');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('gsis');
            $table->string('pagibig');
            $table->string('philhealth');
            $table->string('sss');
            $table->string('tin');
            $table->string('tel_number');
            $table->string('cp_numnber');
            

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
