<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->boolean('status');
            $table->unsignedBigInteger('trainer_id')->nullable();
//            $table->foreign('trainer_id')->references('id')->on('trainers');
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments');

            $table->integer('cost');
            $table->integer('hours');


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
        Schema::dropIfExists('courses');
    }
}
