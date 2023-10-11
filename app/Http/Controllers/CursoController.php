<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    public function index(){

        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
       // return $request->all(); <- devuelve en un objeto todo el contenido del formulario  
      
      /* $curso = new Curso();

       $curso->name = $request->name;
       $curso->description = $request->description;
       $curso->categoria = $request->categoria;

       $curso->save();
       */
       // return $request->all();
       if($request->hasFile('featured')){
            $file = $request->file('featured');
            $destinationPath = 'images/featureds';
            $filename = time(). '-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath,$filename);
       }
       $curso = Curso::create($request->all());

       session()->flash('info','Creado satisfatoriamente');

       return redirect()->route('cursos.show', $curso);
       //return $curso; <-devuelve el objeto para verificar los datos del formulario
    }

    public function show(Curso $curso) {
        //se puede agragar contenido desde el controlador de esta manera
        //$mango = "mango con adobo";

        //$data['manguito'] = $mango;
        //$data['curso']= $curso;
        //$curso = Curso::find($curso);

        //return $curso;
        return view('cursos.show', /*$data*/ compact('curso'));
    }

    public function edit(Curso $curso){ //y esta es la forma corta
        //$curso = Curso::find($id); esta es una forma
        //return $curso;

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){ //y esta es la forma corta
        //$curso = Curso::find($id); esta es una forma
        //return $curso;
        
        $request->validate([
            'name'          => 'required|min:3|max:10',
            'slug'          => 'required|unique:cursos,slug,' . $curso->id,
            'description'   => 'required',
            'categoria'     => 'required'
        ]);

       /*  $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        
        $curso->save(); */

        $curso->update($request->all());

        session()->flash('info','Creado satisfatoriamente');

        return redirect()->route('cursos.show', $curso);
        //return $curso;

        //return $request;
    }
   
    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }

}
