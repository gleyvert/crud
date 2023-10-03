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
    //protected $fillable = ['name', 'description','categoria']; <- existe otra manera de llamar los unicos campor para ser guardado en store

    protected $guarded = ['status']; // ignora los campos que quiero proteger osea los que no quiero que nadie acceda a esos campos. y los  demas si los toma en cuenta

    // sirve para que cuando valla a mandar url que contengas el id y quieran cambiarlo por el nombre u otro entonce utilizamos esta funcion
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
