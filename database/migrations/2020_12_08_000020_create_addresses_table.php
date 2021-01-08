<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->enum('country', ['Venezuela']);
            $table->enum('state', [
                'Amazonas',
                'Anzoátegui',
                'Apure',
                'Aragua',
                'Barinas',
                'Bolívar',
                'Carabobo',
                'Cojedes',
                'Delta Amacuro',
                'Distrito Capital',
                'Falcón',
                'Guárico',
                'Lara',
                'Mérida',
                'Miranda',
                'Monagas',
                'Nueva Esparta',
                'Portuguesa',
                'Sucre',
                'Táchira',
                'Trujillo',
                'Vargas',
                'Yaracuy',
                'Zulia'
            ]);
            $table->string('municipality');
            $table->string('city');
            $table->string('avenue');
            $table->string('street');

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
        Schema::dropIfExists('addresses');
    }
}
