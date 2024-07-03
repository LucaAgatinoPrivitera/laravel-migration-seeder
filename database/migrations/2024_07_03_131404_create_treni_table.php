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
        Schema::create('treni', function (Blueprint $table) {
            $table->timestamps();
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->id('Codice Treno');
            $table->integer('Numero Carrozze');

            $table->boolean('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treni');
    }
};