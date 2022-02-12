<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('delivery_id');
            $table->unsignedBigInteger('kupon_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('kode',20);
            $table->unsignedBigInteger('price');
            $table->integer('kuantiti')->default(1);
            $table->integer('point_pembeli')->default(0);
            $table->integer('point_sponsor')->default(0); 
            $table->integer('commission')->default(0); 
            $table->string('bukti')->nullable();
            $table->integer('discount')->default(0);
            $table->enum('status',['selesai','pembayaran','proses','batal','refund']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kupon_id')->references('id')->on('kupons')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('delivery_id')->references('id')->on('deliveries')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
