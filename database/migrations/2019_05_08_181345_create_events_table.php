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
            $table->increments('id');
            $table->foreign('id')->references('id')->on('users')->onDELETE('CASCADE');
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('wilayah')->onDELETE('CASCADE');
            $table->text('location');
            $table->string('datetime');
            $table->string('date');
            $table->integer('capacity');
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
