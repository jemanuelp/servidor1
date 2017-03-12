<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pelicula;
use Auth;

class PeliculasController extends Controller
{
    /**
     * Muestra todas las peliculas
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $q=$request->has('buscar')?'%'.$request->buscar.'%':'%';

        //primera versión sin incluir los datos de las tareas asociadas
        $pelicula = Pelicula::get();

        //segunda versión asociando las tareas pasa de hacer 13 consultas a solo 4
        /*$peliculas = Pelicula::with('tareas') //obtener los objetos relacionados
        ->where('user_id',Auth::user()->id) //solo los proyectos del usuario autenticado
        ->Where('titulo','like',$q) //busca los que contengan en el titulo la palabra buscar
        ->orderBy('id', 'desc') //en orden descendente por id
        ->paginate(10); //genere la paginación*/

        return view('contenido.index', compact('pelicula'));
    }
}
