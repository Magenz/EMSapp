<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            //current or residing address
            $table->string('res_hbl');
            $table->string('res_street');
            $table->string('res_subvil');
            $table->string('res_barangay');
            $table->string('res_city');
            $table->string('res_province');
            $table->string('res_zipcode');
             //permanent address
            $table->string('perm_hbl');
            $table->string('perm_street');
            $table->string('perm_subvil');
            $table->string('perm_barangay');
            $table->string('perm_city');
            $table->string('perm_province');
            $table->string('perm_zipcode');
        
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
        Schema::dropIfExists('address');
    }
}
