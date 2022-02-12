<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('role',['admin','member']);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('alamat');
            $table->string('no_hp',13);
            $table->string('foto')->nullable();
            $table->integer('city')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('sponsor')->nullable();
            $table->integer('point')->default(0);
            $table->date('batas')->nullable();
            $table->string('app_token')->nullable();
            $table->enum('status',['active','nonactive','pembeli'])->default('active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
