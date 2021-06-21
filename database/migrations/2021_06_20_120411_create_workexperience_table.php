<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkexperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workexperience', function (Blueprint $table) {
            $table->id();
            $table->string('dateFrom');
            $table->string('dateTo');
            $table->string('positionTitle');
            $table->string('department');
            $table->decimal('monthlySalary');
            $table->string('salaryGrade');
            $table->string('appointmentStatus');
            $table->boolean('govService');
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
        Schema::dropIfExists('workexperience');
    }
}
