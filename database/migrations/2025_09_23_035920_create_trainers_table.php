<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('avatar')->nullable(); // URL o path de imagen
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('trainers');
    }
};
