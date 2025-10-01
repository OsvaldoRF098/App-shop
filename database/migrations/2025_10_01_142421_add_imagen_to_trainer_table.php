<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Asegúrate de apuntar a 'trainers'
        Schema::table('trainers', function (Blueprint $table) {
            // Opción A: permitir nulos (simple y sin dependencias)
            if (!Schema::hasColumn('trainers', 'avatar')) {
                $table->string('avatar')->nullable(); // <- más seguro
            }

            // Opción B (si QUIERES NOT NULL): usa default para no romper filas existentes
            // if (!Schema::hasColumn('trainers', 'avatar')) {
            //     $table->string('avatar')->default('default.png'); // not null implícito
            // }
        });

        // Si elegiste Opción A y luego quieres llenar valores:
        // DB::table('trainers')->whereNull('avatar')->update(['avatar' => 'default.png']);
    }

    public function down(): void
    {
        Schema::table('trainers', function (Blueprint $table) {
            if (Schema::hasColumn('trainers', 'avatar')) {
                $table->dropColumn('avatar');
            }
        });
    }
};
