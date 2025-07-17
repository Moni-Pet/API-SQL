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
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedSmallInteger('bred_id');
            $table->string('name', 55);
            $table->date('birthday')->nullable();
            $table->enum('gender', ['Macho', 'Hembra', 'Desconocido']);
            $table->boolean('spayed');
            $table->enum('size', ['Chico, Mediano, Grande']);
            $table->decimal('weight', 5, 2);
            $table->decimal('height', 5, 2);
            $table->string('decription', 200);
            $table->enum('status', ['Adoptado', 'No adoptado', 'Pendiente', 'Personal']);
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();

            //relaciones
            $table->foreign('bred_id')
                ->references('id')->on('breeds')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
