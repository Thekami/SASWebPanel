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
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('service_type_id');
            $table->unsignedBigInteger('service_status_id');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('branch_office_id')->constrained('branch_offices');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('service_type_id')->references('id')->on('service_types');
            $table->foreign('service_status_id')->references('id')->on('service_statuses');
            $table->foreign('user_id')->references('id')->on('users');
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
