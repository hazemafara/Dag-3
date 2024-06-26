<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Straat');
            $table->integer('Huisnummer')->nullable();
            $table->string('Toevoeging')->nullable();
            $table->string('Postcode');
            $table->string('Woonplaats');
            $table->string('Email');
            $table->string('Mobiel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
