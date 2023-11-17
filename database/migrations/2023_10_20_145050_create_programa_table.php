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
        Schema::create('programa', function (Blueprint $table) {
            $table->string('codprograma',2);
            $table->string('nomprograma',100);
            $table->string('facultad',2);//llave foranea
            $table->primary('codprograma');
            $table->foreign('facultad')->references('codfacultad')->on('facultad');//creacion llave foranea
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa');
    }
};
