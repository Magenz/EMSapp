<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibility', function (Blueprint $table) {
            $table->id();
            $table->string('eligibility_name')->nullable();
            $table->string('rating')->nullable();
            $table->string('exam_date')->nullable();
            $table->string('exam_place')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_date_validity')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('eligibility');
    }
}
