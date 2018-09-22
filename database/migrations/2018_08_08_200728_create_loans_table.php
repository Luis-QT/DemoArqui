<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->datetime('startDateLoan');
            $table->datetime('endDateLoan');
            $table->datetime('devolutionDate')->nullable();
            $table->datetime('endDateLoanExt')->nullable();
            $table->smallInteger('state');
            $table->integer('holiday_id')->nullable()->unsigned();
            $table->foreign('holiday_id')->nullable()->references('id')->on('holidays');
            $table->integer('employee_id')->nullable()->unsigned();
            $table->foreign('employee_id')->nullable()->references('id')->on('users');
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
        Schema::dropIfExists('loans');
    }
}
