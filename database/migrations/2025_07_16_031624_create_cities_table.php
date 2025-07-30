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
        Schema::create('cities', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->string('city', 150);
            $table->unsignedTinyInteger('state_id');
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('state_id')
                ->references('id')->on('states')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
