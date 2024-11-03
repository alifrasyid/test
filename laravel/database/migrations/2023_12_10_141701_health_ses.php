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
        Schema::create('health_ses', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Username');
            $table->string('Email');
            $table->string('password');
            $table->string('Umur');
            $table->string('TanggalLahir');
            $table->string('NoHP');
            $table->string('Status');
            $table->string('Note');
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_ses');
    }
};
