<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesisSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thesisSpecifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adviser')->nullable();
            $table->integer('thesis_id')->unsigned()->nullable();
            $table->foreign('thesis_id')->references('id')->on('thesis');
            $table->string('extension');
            $table->string('observations');
            $table->string('accompaniment');
            $table->text('content');
            $table->text('summary');
            $table->text('recomendations')->nullable();
            $table->text('conclusions')->nullable();
            $table->text('bibliography')->nullable();
            $table->text('keywords')->nullable();
            $table->string('mention');
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
        Schema::dropIfExists('thesisSpecifications');
    }
}
