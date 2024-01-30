<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('street');                       // Calle y número
            $table->string('neighborhood')->nullable();     // Colonia o Barrio
            $table->string('city')->nullable();             // Ciudad o Municipio
            $table->string('state')->nullable();            // Estado o Provincia
            $table->string('postal_code')->nullable();      // Código Postal
            $table->string('country')->nullable();          // País
            $table->unsignedBigInteger('address_type_id');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('address_type_id')->references('id')->on('address_types');
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
};
