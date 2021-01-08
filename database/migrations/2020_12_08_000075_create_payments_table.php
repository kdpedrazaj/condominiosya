<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->string('code');

            $table->unsignedBigInteger('month_id')->unique();
            $table->foreign('month_id')->references('id')->on('months')->onDelete('cascade')->onUpdate('cascade');

            $table->date('reg_date');
            $table->string('details', 1000)->nullable();
            $table->text('file_path');

            $table->string('total');

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
        Schema::dropIfExists('payments');
    }
}
