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
        Schema::create('adoption', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('adopter_id');
            $table->unsignedInteger('pet_id');
            $table->date('date');
            $table->enum('adoption_status', ['En proceso', 'Cancelada', 'Realiazada', 'Revocada']);
            $table->string('notes', 250)->nullable();
            $table->dateTime('delivery_date');
            $table->timestamps();

            //relaciones
            $table->foreign('adopter_id')
                ->references('id')->on('adopters');

            $table->foreign('pet_id')
                ->references('id')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
