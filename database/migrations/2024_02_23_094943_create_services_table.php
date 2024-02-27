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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('artisan_id');
            $table->integer('hour');
            $table->integer('tarif');
            $table->timestamps();
            $table->foreign('artisan_id')->references('id')->on('artisans')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    // /**
    //  * Reverse the migrations.
    //  */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};