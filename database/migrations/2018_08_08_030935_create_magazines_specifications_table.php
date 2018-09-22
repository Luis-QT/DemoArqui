<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazinesSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazine_Specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('issn');
            $table->string('issnD');
            $table->string('publicationDate');
            $table->text('summary');
            $table->string('directive');
            $table->integer('magazine_id')->unsigned()->nullable();
            $table->foreign('magazine_id')->references('id')->on('magazines');
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
        Schema::dropIfExists('magazinesSpecifications');
    }
}
