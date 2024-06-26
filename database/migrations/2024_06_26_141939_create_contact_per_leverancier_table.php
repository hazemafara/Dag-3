<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPerLeverancierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leverancier_id');
            $table->unsignedBigInteger('contact_id');

            $table->foreign('leverancier_id')->references('id')->on('leveranciers')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_per_leverancier');
    }
}
