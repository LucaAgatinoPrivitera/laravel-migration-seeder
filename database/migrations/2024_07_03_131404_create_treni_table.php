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
            $table->string('Stazione di partenza')->nullable();
            $table->string('Stazione di arrivo')->nullable();
            $table->dateTime('Orario di partenza')->nullable();
            $table->dateTime('Orario di arrivo')->nullable();
            $table->id('Codice Treno')->nullable();
            $table->integer('Numero Carrozze')->nullable();

            $table->boolean('In orario')->nullable();
            $table->boolean('Cancellato')->nullable();
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
