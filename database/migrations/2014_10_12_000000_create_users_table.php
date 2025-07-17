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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->foreignId('user_type_id')->constrained('types_user')->cascadeOnUpdate()->cascadeOnDelete()->default(3);
            $table->string('name');
            $table->string('last_name');
            $table->string('last_name2')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('account_verification')->nullable();
            $table->enum('gender', ['masculino', 'femenino', '39 tipos de gays']);
            $table->date('birth_date');
            $table->string('two_factor_code')->nullable();
            $table->timestamp('two_factor_expires_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
