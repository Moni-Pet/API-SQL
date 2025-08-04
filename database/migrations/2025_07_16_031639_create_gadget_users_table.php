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
        Schema::create('gadget_users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('gadget_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('gadget_id')
                ->references('id')->on('gadgets')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadget_users');
    }
};
