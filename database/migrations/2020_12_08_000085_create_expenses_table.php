<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('typesexpense_id')->unique();
            $table->foreign('typesexpense_id')->references('id')->on('typesexpenses')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('expensesdetail_id')->unique();
            $table->foreign('expensesdetail_id')->references('id')->on('expensesdetails')->onDelete('cascade')->onUpdate('cascade');



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
        Schema::dropIfExists('expenses');
    }
}
