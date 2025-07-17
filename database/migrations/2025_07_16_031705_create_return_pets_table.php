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
        Schema::create('return_pets', function (Blueprint $table) {
            $table->increments('id')->unsigned(); // UNSIGNED INTEGER auto-increment
            $table->unsignedInteger('adoption_id');
            $table->dateTime('date');
            $table->string('comment', 250);
            $table->timestamps();

            //relaciones
            $table->foreign('adoption_id')
                ->references('id')->on('adoption')
                ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_pets');
    }
};
