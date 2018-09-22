<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('incomeNumber');
            $table->string('clasification');
            $table->string('barcode');
            $table->smallInteger('copy');
            $table->smallInteger('volume')->nullable();
            $table->integer('acquisitionModality');
            $table->string('acquisitionSource');
            $table->string('acquisitionPrice');
            $table->string('acquisitionDate');
            $table->integer('availability');
            $table->integer('printType');
            $table->string('publicationLocation');
            $table->integer('book_id')->unsigned()->nullable();
            $table->integer('stand_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('stand_id')->references('id')->on('stands');
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
        Schema::dropIfExists('bookCopies');
    }
}
