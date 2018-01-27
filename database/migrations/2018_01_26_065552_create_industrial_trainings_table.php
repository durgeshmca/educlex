<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrialTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrial_trainings', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fname');
          $table->string('lname');
          $table->string('email');
          $table->string('contact');
          $table->text('addres');
          $table->string('state');
          $table->string('city');
          $table->string('qualification');
          $table->string('year_sem');
          $table->string('interests');
          $table->mediumText('images');
          $table->string('payment_mode');
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
        Schema::dropIfExists('industrial_trainings');
    }
}
