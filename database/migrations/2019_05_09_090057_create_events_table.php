<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_event');
            $table->string('image')->default('default.jpg');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->date('date')->useCurrent = true;
            $table->string('time');
            $table->string('location');
            $table->string('status')->default("Tersedia");
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
        Schema::dropIfExists('events');
    }
}
