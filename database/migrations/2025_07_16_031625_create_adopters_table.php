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
        Schema::create('adopters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('phone', 10);
            $table->string('street', 250);
            $table->string('neighborhood', 100);
            $table->unsignedSmallInteger('city_id');
            $table->unsignedTinyInteger('state_id');
            $table->char('postal_code', 5);
            $table->string('reference', 250)->nullable();
            $table->timestamps();

            //relaciones
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('city_id')
                ->references('id')->on('cities');

            $table->foreign('state_id')
                ->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopters');
    }
};
