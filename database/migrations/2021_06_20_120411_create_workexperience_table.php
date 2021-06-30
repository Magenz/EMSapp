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
            $table->string('dateFrom')->nullable();
            $table->string('dateTo')->nullable();
            $table->string('positionTitle')->nullable();
            $table->string('department')->nullable();
            $table->decimal('monthlySalary')->nullable();
            $table->string('salaryGrade')->nullable();
            $table->string('appointmentStatus')->nullable();
            $table->string('govService')->nullable();
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
