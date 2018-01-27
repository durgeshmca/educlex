<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeWrokshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_wrokshops', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fname');
          $table->string('lname');
          $table->string('email');
          $table->string('contact');
          $table->string('college');
          $table->text('address');
          $table->string('landmark');
          $table->string('state');
          $table->string('city');
          $table->mediumText('images');
          $table->integer('total_students');
          $table->string('interests');
          $table->string('payment_mode');
          $table->boolean('placement_assistance');
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
        Schema::dropIfExists('college_wrokshops');
    }
}
