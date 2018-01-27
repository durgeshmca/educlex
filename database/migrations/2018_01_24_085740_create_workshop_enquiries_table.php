<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_enquiries', function (Blueprint $table) {
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
            $table->string('Designation');
            $table->string('company');
            $table->string('college');
            $table->string('year_sem');
            $table->string('interests');
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
        Schema::dropIfExists('workshop_enquiries');
    }
}
