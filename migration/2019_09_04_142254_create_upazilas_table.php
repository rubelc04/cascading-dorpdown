<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpazilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upazilas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('upazila_name');
            $table->integer('district_id');
            $table->integer('division_id');
            $table->timestamps();
        });
    }


    /***
     * for foreign key relation
     *
     $table->integer('district_id')->unsigned();
     $table->foreign('district_id')->references('id')->on('districts');

     $table->integer('division_id')->unsigned();
     $table->foreign('division_id')->references('id')->on('divisions'); 
     *
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upazilas');
    }
}
