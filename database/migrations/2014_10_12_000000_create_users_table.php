<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('volunteer');
            $table->rememberToken();
            //profile
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('jenis_kelamin')->nullable();
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->string('user_image')->default('default.jpg');
            $table->string('nik_pengguna')->nullable();
            $table->integer('point')->default('0');
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
