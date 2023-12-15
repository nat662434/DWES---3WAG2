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
        Schema::create('ikasgaiaks', function (Blueprint $table) {
            $table->id('idIkasgaia');
            $table->string('izena');
            $table->string('deskribapena');
            $table->integer('orduKop');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikasgaiaks');
    }
};
