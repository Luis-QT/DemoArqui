<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('restOfTheTitle');
            $table->integer('numberOfCopies');
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->integer('editorial_id')->unsigned()->nullable();
            $table->foreign('editorial_id')->references('id')->on('editorials');
            $table->integer('stand_id')->unsigned()->nullable();
            $table->foreign('stand_id')->references('id')->on('stands');
            $table->integer('volume');
            $table->integer('number');
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
        Schema::dropIfExists('magazines');
    }
}
