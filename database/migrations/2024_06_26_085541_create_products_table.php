<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CategorieId');
            $table->string('Naam');
            $table->string('SoortAllergie')->nullable();
            $table->string('Barcode');
            $table->date('Houdbaarheidsdatum');
            $table->string('Omschrijving');
            $table->string('Status');
            $table->timestamps();

            // Assuming you have a categories table and want to set up a foreign key constraint
            $table->foreign('CategorieId')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
