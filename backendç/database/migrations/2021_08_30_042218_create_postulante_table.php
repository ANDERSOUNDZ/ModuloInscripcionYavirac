<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('APELLIDOS')->nullable();
            $table->string('NOMBRES')->nullable();
            $table->string('POS_NOTA')->nullable();
            $table->date('USU_FECHA_NAC')->nullable();
            $table->string('USU_NACIONALIDAD')->nullable();
            $table->string('GENERO')->nullable();
            $table->string('PROVINCIA_RESIDE')->nullable();
            $table->string('CANTON_RESIDE')->nullable();
            $table->string('PARROQUIA_RESIDE')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('INS_TELEFONO')->nullable();
            $table->string('INS_CELULAR')->nullable();
            $table->string('ETNIA')->nullable();
            $table->string('DISCAPACIDAD')->nullable();
            $table->string('INSTANCIA_POSTULACION')->nullable();
            $table->string('INSTANCIA_ASIGNACION')->nullable();
            $table->string('GRATUIDAD')->nullable();
            $table->string('TIPO_INSTITUCION')->nullable();
            $table->string('TIPO_FINANCIAMIENTO')->nullable();

            $table->string('NUEVO_CORREO')->nullable();
            $table->string('NUEVO_TELF_CONTACTO')->nullable();
            $table->date('FECHA_CONTACTO')->nullable();
            $table->string('RESPONSABLES')->nullable();
            $table->string('OBSERVACIONES')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulante');
    }
}
