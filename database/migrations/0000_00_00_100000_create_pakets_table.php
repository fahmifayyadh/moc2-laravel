<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name')->unique();
            $table->string('slug')->unique();
            $table->longText('desc')->nullable();
            $table->integer('batas')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->boolean('is_member')->default(0);
            $table->integer('point_pembeli')->default(0);
            $table->integer('point_sponsor')->default(0); 
            $table->unsignedBigInteger('price')->default(0);
            $table->integer('commission')->default(0);
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
        Schema::dropIfExists('pakets');
    }
}
