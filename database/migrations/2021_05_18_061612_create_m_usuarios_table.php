<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUsuariosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('m_usuarios', function (Blueprint $table) {
            $table->bigIncrements('ID_Usuario');
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Correo');
            $table->string('Telefono');
            $table->date('FechaNacimiento');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down() {
        Schema::dropIfExists('m_usuarios');
    }

}
