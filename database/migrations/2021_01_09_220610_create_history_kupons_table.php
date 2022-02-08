<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_kupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kupon_id');
            $table->timestamps();
            $table->foreign('kupon_id')->references('id')->on('kupons')->onUpdate('cascade')->onDelete('cascade');         
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');         
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_kupons');
    }
}
