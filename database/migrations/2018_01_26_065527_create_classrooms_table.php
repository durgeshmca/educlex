<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fname');
          $table->string('lname');
          $table->string('email');
          $table->string('contact');
          $table->text('addres');
          $table->string('state');
          $table->string('city');
          $table->string('category');
          $table->string('qualification');
          $table->string('Designation')->nullable();
          $table->string('company')->nullable();
          $table->string('college')->nullable();
          $table->string('year_sem')->nullable();
          $table->string('interests');
          $table->string('payment_mode');
          $table->mediumText('images');
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
        Schema::dropIfExists('classrooms');
    }
}
