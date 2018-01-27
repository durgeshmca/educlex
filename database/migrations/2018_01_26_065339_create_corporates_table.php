<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fname');
          $table->string('lname');
          $table->string('email');
          $table->string('contact');
          $table->string('company');
          $table->string('designation');
          $table->text('address');
          $table->string('landmark');
          $table->string('state');
          $table->string('city');
          $table->mediumText('images');
          $table->integer('total_candidates');
          $table->string('interests');
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
        Schema::dropIfExists('corporates');
    }
}
