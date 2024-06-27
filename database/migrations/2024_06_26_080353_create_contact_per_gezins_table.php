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
        Schema::create('contact_per_gezins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id');
            $table->unsignedBigInteger('contact_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('gezin_id')->references('id')->on('gezins')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_per_gezins');
    }
};
