<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->string('sede')->nullable();
            $table->string('codigo')->nullable();
            $table->string('nivel')->nullable();
            $table->string('gestion')->nullable();
            $table->string('gestion_departamento')->nullable();
            $table->string('ubigeo', 6)->nullable();
            $table->foreign('ubigeo')->references('id')->on('distritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
