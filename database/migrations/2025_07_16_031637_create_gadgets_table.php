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
        Schema::create('gadgets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('gadget_type_id');
            $table->unsignedInteger('pet_id')->nullable();
            $table->string('mac_address', 17)->unique();
            $table->string('alias', 255)->default('Gadget sin nombre');
            $table->timestamps();

            // Relaciones
            $table->foreign('gadget_type_id')
                ->references('id')->on('gadget_types')
                ->onDelete('restrict');

            $table->foreign('pet_id')
                ->references('id')->on('pets')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgets');
    }
};
