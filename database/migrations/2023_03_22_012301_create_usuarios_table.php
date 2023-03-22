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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password') ;
            $table->rememberToken();
            $table->string('telefono');
            $table->date('fecNacimiento');
            $table->string('genero');
            $table->string('CURP');
            $table->float('altura', 8, 2);
            $table->float('peso', 8, 2);
            $table->string('tSangre');
            $table->string('residencia');
            $table->string('enfermedad');
            $table->string('discapacidad');
            $table->string('alergias');
            $table->string('medicamentos');
            $table->string('embarazo');
            $table->string('DoA');
            $table->string('donar');
            $table->string('file_path')->default("user.png");;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
