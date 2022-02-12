<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('kupon_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('link_invoice')->nullable();
            $table->string('kode',20);
            $table->dateTime('batas')->nullable();
            $table->unsignedBigInteger('price');
            $table->string('bukti',254)->nullable();
            $table->integer('point_pembeli')->default(0);
            $table->integer('point_sponsor')->default(0); 
            $table->integer('commission')->default(0);
            $table->integer('discount')->default(0);
            $table->enum('status',['selesai','pembayaran','batal']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kupon_id')->references('id')->on('kupons')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')->on('pakets')->onDelete('cascade');
        $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_courses');
    }
}
