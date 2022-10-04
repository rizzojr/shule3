<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('instrument');
            $table->string('course_name');
            $table->string('course_type');
            $table->string('duration');
            $table->string('name');            
            $table->string('gender');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('dob');           
            $table->string('guardian')->nullable();
            $table->text('message');
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
        Schema::dropIfExists('individuals');
    }
}
