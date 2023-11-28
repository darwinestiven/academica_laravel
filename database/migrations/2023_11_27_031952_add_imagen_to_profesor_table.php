<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::table('profesor', function (Blueprint $table) {
            $table->string('imagen')->nullable(); // Nuevo campo para la imagen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(){
        Schema::table('profesor', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
};
