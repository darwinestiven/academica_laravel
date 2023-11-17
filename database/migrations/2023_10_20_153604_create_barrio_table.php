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
        Schema::create('barrio', function (Blueprint $table) {
            $table->string('codbarrio',2);
            $table->string('nombarrio',100);
            $table->integer('estbarrio');
            $table->integer('comuna');
            $table->primary('codbarrio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrio');
    }
};
