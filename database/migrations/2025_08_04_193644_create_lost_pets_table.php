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
        Schema::create('lost_pets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('user_find_id')->nullable();

            $table->string('lat');
            $table->string('lon');
            $table->string('description')->nullable();
            $table->datetime('lost_date');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('pet_id')->references('id')->on('pets')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('user_find_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_pets');
    }
};
