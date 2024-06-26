<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPerLeverancierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('LeverancierId');
            $table->unsignedBigInteger('ProductId');
            $table->date('DatumAangeleverd');
            $table->date('DatumEerstVolgendeLevering');

            $table->foreign('LeverancierId')->references('id')->on('leverancier')->onDelete('cascade');
            $table->foreign('ProductId')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_per_leverancier');
    }
}
