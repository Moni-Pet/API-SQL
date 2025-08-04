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
        Schema::create('adoption_followups', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('adoption_id');
            $table->dateTime('follow_up_date');
            $table->enum('animal_condition', [
                'Buenas condiciones',
                'Mejor que antes',
                'Regular',
                'Peor que antes',
                'Pésimas condiciones'
            ]);
            $table->string('comment', 250)->nullable();
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('adoption_id')
                ->references('id')->on('adoption');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_followups');
    }
};
