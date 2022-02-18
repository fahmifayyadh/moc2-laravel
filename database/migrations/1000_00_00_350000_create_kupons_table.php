<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('kupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('product')->default(false);
            $table->boolean('course')->default(false);
            $table->string('kode')->unique();
            $table->integer('nominal');
            $table->integer('penggunaan')->default(1)->unsigned();
            $table->date('batas');
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
        Schema::dropIfExists('kupons');
    }
}
