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
        Schema::create('nota', function (Blueprint $table) {
            $table->float('parcial1',5,2);
            $table->float('parcial2',5,2);
            $table->float('efinal',5,2);
            $table->float('nfinal',5,2);
            $table->char('estado',1);
            $table->string('estudiante',2);//llave foranea
            $table->string('materia',2);//llave foranea
            $table->string('profesor',2);//llave foranea
            $table->foreign('estudiante')->references('codestudiante')->on('estudiante');//creacion llave foranea
            $table->foreign('materia')->references('codmateria')->on('materia');//creacion llave foranea
            $table->foreign('profesor')->references('codprofesor')->on('profesor');//creacion llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
