<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MUsuario extends Model {

    protected $fillable = ["Nombre", "Apellido", "Correo", "Telefono", "FechaNacimiento"];

}
