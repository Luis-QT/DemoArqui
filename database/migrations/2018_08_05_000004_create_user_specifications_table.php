<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('cellPhone')->nullable();
            $table->string('personalEmail');
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->string('urlImg')->nullable();
            $table->string('password')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('user_specifications');
    }
}
