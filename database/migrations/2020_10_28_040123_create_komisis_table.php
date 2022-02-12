<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komisis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaction_course_id');
            $table->string('no_rekening',30);
            $table->integer('amount');
            $table->string('bank');
            $table->string('name');
            $table->enum('status',['menunggu','selesai','batal']);
            $table->timestamps(); 	
            $table->foreign('transaction_course_id')->references('id')->on('transaction_courses')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komisis');
    }
}
