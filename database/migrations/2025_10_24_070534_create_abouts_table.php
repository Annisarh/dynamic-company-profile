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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo');
            $table->text('tagline')->nullable();
            $table->text('about')->nullable();
            $table->string('email');
            $table->string('telp')->nullable();
            $table->string('location');
            $table->string('intaname')->nullable();
            $table->text('more');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
