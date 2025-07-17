<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedSmallInteger('service_id');
            $table->unsignedInteger('apointment_id');
            $table->decimal('price_service', 7, 2);
            $table->decimal('discount', 7, 2)->default(0.00);
            $table->timestamps();

            //relaciones
            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onDelete('cascade');

            $table->foreign('apointment_id')
                ->references('id')->on('appointments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_details');
    }
};
