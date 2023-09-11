<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       // $this->call(CursoSeeder::class); <- en vez de llamar al seeder CursoSeeder para ejecutar el factory se ejecuta la clase directamente como en el siguiente codigo
        Curso::factory(50)->create();
        /*consultas
            php artisan migrate --seed para ejecutar la migracion por primera vez de una clonacion
            php artisan migrate:fres --seed para refrescar la migracion limpiarla y volverla a migrar y ingrese las seeder para los datos

        CONSULTAS A LA TABLA:
        para definir la busqueda especifica
                $cursos = Curso::where('name','like','% voluptate %')->get();
$cursos = Curso::where('id','<>','49')->get();
$cursos = Curso::where('id','<=','5')->get();
$cursos = Curso::where('id','>=','45')->get();
 $cursos = Curso::where('id','>','45')->get();

 ES LO MISMO
 $curso = Curso::find(5);
  $curso = Curso::where('id','5')->first();

  BUSCAR UN NOMBRE EN ESPECIFICO Y TRAE LOS DEMAS DATOS QUE TENGA SIN (ARRAY)
   $curso = Curso::where('name','Nulla dolores ut quia eligendi non.')->first();

     BUSCAR UN NOMBRE EN ESPECIFICO Y TRAE LOS DEMAS DATOS QUE TENGA CON (ARRAY)
   $curso = Curso::where('name','Nulla dolores ut quia eligendi non.')->get();
       
   SELECCIONA LOS CAMPOS A CONSULTAR, DEFINE LA CATEGORIA QUE TIENE QUE BUSCAR, Y SOLO 5 RESULTADOS LOS PRIMEROS POR DEFECTO (LE PUEDE ASIGNAR OTRO NOMBRE AL CAMPO SELECCIONADO OPCIONAL)
   $cursos = Curso::select('name as title','description','categoria')->where('categoria','Desarrollo web')->take(5)->get();
   
      SELECCIONA LOS CAMPOS A CONSULTAR, DEFINE LA CATEGORIA QUE TIENE QUE BUSCAR, Y TRAE EN ARRAY TODOS LOS RESULTADOS DE LA CATEGORIA EN ORDEN ACENDENTE
     $cursos = Curso::select('name as title','description','categoria')->orderBy('name','asc')->where('categoria','Desarrollo web')->get();
   
           SELECCIONA LOS CAMPOS A CONSULTAR, DEFINE LA CATEGORIA QUE TIENE QUE BUSCAR, Y TRAE EN ARRAY TODOS LOS RESULTADOS DE LA CATEGORIA EN ORDEN ACENDENDE
    $cursos = Curso::select('name','description','categoria')->orderBy('name','asc')->where('categoria','Desarrollo web')->get();
     
               SELECCIONA LOS CAMPOS A CONSULTAR, DEFINE LA CATEGORIA QUE TIENE QUE BUSCAR, Y TRAE EN ARRAY TODOS LOS RESULTADOS DE LA CATEGORIA EN ORDEN ACENDENDE
    $cursos = Curso::select('name','description')->orderBy('name','asc')->where('categoria','Desarrollo web')->get();
   
                           SELECCIONA LOS CAMPOS A CONSULTAR,(SIN DEFINIR WHERE (LOS CAMPOS QUE CONTENGAN ALGUN NOMBRE A BUSCAR)) Y TRAE EN ARRAY TODOS LOS RESULTADOS  EN ORDEN ACENDENDE
    $cursos = Curso::select('name','description')->orderBy('name','asc')->get();
    
    SELECCIONA LOS CAMPOS A CONSULTAR,(SIN DEFINIR WHERE (LOS CAMPOS QUE CONTENGAN ALGUN NOMBRE A BUSCAR)) Y TRAE EN ARRAY TODOS LOS RESULTADOS.
    $cursos = Curso::select('name','description')->get();
   
    BUSCA CON EL WHERE EL CAMPO (CATEGORIA) QUE CONTENGA DICHA DESCRIPCION(DESARROLLO WEB) EN ORDEN POR NOMBRE ASENDENTE PERO TRAE UN SOLO RESULTADO
   $curso = Curso::where('categoria', 'Desarrollo web')->orderBy('name','asc')->first();

   BUSCA CON EL WHERE EL CAMPO (CATEGORIA) QUE CONTENGA DICHA DESCRIPCION(DESARROLLO WEB) EN ORDEN POR NOMBRE ASENDENTE TRAE TODOS LOS RESULTADOS
    $curso = Curso::where('categoria', 'Desarrollo web')->orderBy('name','asc')->get();
    
       BUSCA CON EL WHERE EL CAMPO (CATEGORIA) QUE CONTENGA DICHA DESCRIPCION(DESARROLLO WEB) EN ORDEN POR ID DESENDENTE TRAE TODOS LOS RESULTADOS
     $curso = Curso::where('categoria', 'Desarrollo web')->orderBy('id','desc')->get();
    
            BUSCA CON EL WHERE EL CAMPO (CATEGORIA) QUE CONTENGA DICHA DESCRIPCION(DESARROLLO WEB) TRAE TODOS LOS RESULTADOS EN ARRAY SI ES GET
    $curso = Curso::where('categoria', 'Desarrollo web')->get(); 
    
    TRAE TODOS LOS RESULTADOS DE LOS CAMPOS DE DICHA TABLA
    $curso = Curso::all();
    */
    }
}
