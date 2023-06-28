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
        Schema::create('soalquiz', function (Blueprint $table) {
            $table->id();
            $table->string('soal')->unique();
            $table->string('a')->unique();  
            $table->string('b')->unique();  
            $table->string('c')->unique();  
            $table->string('d')->unique();  
            $table->string('kunci_jawaban')->unique();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soalquiz');
    }
};
