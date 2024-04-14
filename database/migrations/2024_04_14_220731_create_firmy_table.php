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
        Schema::create('firmy', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa', 100);
            $table->string('adres', 100)->nullable();
            $table->bigInteger('nip');
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
        Schema::dropIfExists('firmy');
    }
};
