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
        Schema::create('breeds', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('type_pet_id');
            $table->string('breed', 50);
            $table->timestamps();

            //relaciones    
            $table->foreign('type_pet_id')
                  ->references('id')
                  ->on('types_pet')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
