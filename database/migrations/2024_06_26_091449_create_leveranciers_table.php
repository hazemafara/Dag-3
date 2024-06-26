<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeveranciersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leverancier', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('ContactPerson');
            $table->string('LeverancierNummer');
            $table->string('LeverancierType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leverancier');
    }
}
