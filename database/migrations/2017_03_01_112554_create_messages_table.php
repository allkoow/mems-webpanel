<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->integer('message_type_id')->unsigned();
            $table->text('frame');
            $table->date('date');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('messages', function(Blueprint $table) {
            $table->foreign('sender_id')->references('id')->on('agents');
        });

        Schema::table('messages', function(Blueprint $table) {
            $table->foreign('receiver_id')->references('id')->on('agents');
        });

        Schema::table('messages', function(Blueprint $table) {
            $table->foreign('message_type_id')->references('id')->on('message_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
