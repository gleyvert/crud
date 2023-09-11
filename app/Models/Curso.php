<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //si quiero ignorar la convencion de este modelo
    //que apunta a la tabla cursos puedo implementar otra forma de llamar otra table y que use siempre esa mediante este modelo

    //protected $table = "users"; //<- pero siempre usaremos la convencion del modelo
}
