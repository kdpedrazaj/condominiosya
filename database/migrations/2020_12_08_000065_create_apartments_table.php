<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();

            $table->string('apart_num', 3)->unique();
            $table->string('floor_num', 3)->unique();

            $table->unsignedBigInteger('building_id')->unique();
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('typesaliquot_id')->unique();
            $table->foreign('typesaliquot_id')->references('id')->on('typesaliquots')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('typesapartment_id')->unique();
            $table->foreign('typesapartment_id')->references('id')->on('typesapartments')->onDelete('cascade')->onUpdate('cascade');

            
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
        Schema::dropIfExists('apartments');
    }
}
