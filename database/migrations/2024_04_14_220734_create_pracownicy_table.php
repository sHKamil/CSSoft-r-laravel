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
        Schema::create('pracownicy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_firmy')->nullable();
            $table->foreign('id_firmy')->references('id')->on('firmy')->onDelete('cascade');
            $table->string('imie', 50);
            $table->string('nazwisko', 50);
            $table->string('telefon', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->text('opis')->nullable();
            $table->timestamp('data_dodania')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pracownicy');
    }
};
