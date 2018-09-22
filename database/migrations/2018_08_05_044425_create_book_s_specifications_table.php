<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookSpecifications', function (Blueprint $table) {
            $table->increments('id');
            $table->text('summary');
            $table->string('isbn');
            $table->string('extension');
            $table->text('observations');
            $table->string('dimensions');
            $table->string('accompaniment');
            $table->text('keywords');
            $table->text('content');
            $table->string('publicationDate');
            $table->integer('tome')->nullable();
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')->on('books');

            $table->softDeletes();
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
        Schema::dropIfExists('bookSpecifications');
    }
}
