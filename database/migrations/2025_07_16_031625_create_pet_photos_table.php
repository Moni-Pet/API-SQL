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
        Schema::create('pet_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger(column: 'pet_id');
            $table->string('photo_link', 2083);
            $table->timestamps();

            //relaciones
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
        Schema::dropIfExists('pet_photos');
    }
};
