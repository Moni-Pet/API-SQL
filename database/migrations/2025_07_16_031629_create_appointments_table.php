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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('pet_id');

            $table->enum('status', ['Pendiente', 'Finalizada', 'Cancelada']);
            $table->string('descripcion', 250)->nullable();
            $table->decimal('total_price', 7, 2)->default(0.00);

            $table->dateTime('creation_date');
            $table->dateTime('date');
            
            $table->string('transferce_code', 100)->nullable();
            $table->enum('type_appointment', ['Estetica', 'Medica', 'Adoptiva']);

            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('appointments');
    }
};
