<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function (Blueprint $table) {
            // Agregar las nuevas columnas que pueden ser nulas
            $table->char('dni',8)->nullable();
            $table->string('correo')->nullable();
            $table->string('celular')->nullable();
        });
    }

    public function down()
    {
        Schema::table('table_name', function (Blueprint $table) {
            // Eliminar las columnas si es necesario
            $table->dropColumn('nueva_columna_1');
            $table->dropColumn('nueva_columna_2');
            $table->dropColumn('nueva_columna_3');
        });
    }
}
