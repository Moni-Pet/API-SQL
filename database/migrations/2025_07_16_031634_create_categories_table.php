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
        Schema::create('categories', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned(); // UNSIGNED SMALLINT auto-increment
            $table->string('category', 12);
            $table->unsignedSmallInteger('type_category_id');
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('type_category_id')
                ->references('id')->on('types_category')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
