<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->id();
            $table->string('spouse_surname');
            $table->string('spouse_firstname');
            $table->string('spouse_middlename');
            $table->string('spouse_name_ext');
            $table->string('spouse_occupation');
            $table->string('spouse_employer_business');
            $table->string('spouse_business_address');
            $table->string('spouse_tel_number');
            $table->string('father_surname');
            $table->string('father_firstname');
            $table->string('father_middlename');
            $table->string('father_name_ext');
            $table->string('mother_maiden_name');
            $table->string('mother_surname');
            $table->string('mother_firstname');
            $table->string('mother_middlename');
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
        Schema::dropIfExists('family');
    }
}
