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
        Schema::create('services', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->unsignedSmallInteger('type_service_id');
            $table->string('service', 150);
            $table->decimal('price', 6, 2);
            $table->decimal('discounts', 6, 2)->default(0.00);
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('type_service_id')
                ->references('id')->on('types_services')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
