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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('order_id');
            $table->unsignedSmallInteger('producto_id');
            $table->integer('quantity');
            $table->decimal('price', 7, 2);
            $table->decimal('discount', 7, 2)->default(0.00);
            $table->timestamps();

            //relaciones
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');

            $table->foreign('producto_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
