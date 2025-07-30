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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('user_id');
            $table->dateTime('purchase_date');
            $table->dateTime('pickup_date');
            $table->decimal('price', 7, 2);
            $table->enum('status', ['pendiente', 'entregado', 'cancelado']);
            $table->string('transferce_code', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();

            //relaciones
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
        Schema::dropIfExists('orders');
    }
};
