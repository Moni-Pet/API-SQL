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
        Schema::create('appointment_pets', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('apointment_id');
            $table->unsignedInteger('pet_id');
            $table->timestamps();

            //relaciones
            $table->foreign('apointment_id')
                ->references('id')->on('appointments')
                ->onDelete('cascade');

            $table->foreign('pet_id')
                ->references('id')->on('pets')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_pets');
    }
};
