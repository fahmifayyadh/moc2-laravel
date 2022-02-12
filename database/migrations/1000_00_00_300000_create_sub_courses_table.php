<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('babcourse_id');
            $table->string('name');
            $table->longText('value');
            $table->integer('sequence');
            $table->timestamps();
            $table->foreign('babcourse_id')->references('id')->on('babcourses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_courses');
    }
}
