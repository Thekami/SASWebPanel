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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->nullable();
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('service_type_id');
            $table->unsignedBigInteger('service_status_id');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('service_type_id')->references('id')->on('service_types');
            $table->foreign('service_status_id')->references('id')->on('service_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
