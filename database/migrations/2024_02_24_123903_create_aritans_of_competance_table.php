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
        Schema::create('aritans_of_competance', function (Blueprint $table) {
            $table->id();

            $table->foreignId('artisan_id')
            ->constrained('artisans')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreignId('competance_id')
            ->constrained('competances')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aritans_of_competance');
    }
};