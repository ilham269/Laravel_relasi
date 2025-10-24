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
        Schema::create('telepons', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->unsignedBigInteger('id_pengguna');

            $table->foreign('id_pengguna')->references('id')->on('penggunas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telepons');
    }
};
