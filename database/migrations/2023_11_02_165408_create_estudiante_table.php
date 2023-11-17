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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('codestudiante',10);
            $table->string('nomestudiante',100);
            $table->integer('edaestudiante');
            $table->date('fechestudiante');
            $table->char('sexestudiante',1);
            $table->string('ciudad',2);//llave foranea
            $table->string('barrio',2);//llave foranea
            $table->string('programa',2);//llave foranea
            $table->primary('codestudiante');
            $table->foreign('ciudad')->references('codciudad')->on('ciudad');//creacion llave foranea
            $table->foreign('barrio')->references('codbarrio')->on('barrio');//creacion llave foranea
            $table->foreign('programa')->references('codprograma')->on('programa');//creacion llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
