<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use App\Models\Generos;
use App\Models\Generos_Pelicula;
use App\Models\Tipos_Usuario;
use App\Models\Funciones;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $peliculas = Peliculas::all();
        return view('usuarios.index', ['peliculas' => $peliculas]);
    }    

    public function peliculas()
    {
        // Obtener los géneros desde la base de datos
        $generos = Generos::all();
    
        // Mostrar el formulario para crear una nueva película
        return view('usuarios.peliculas', ['generos' => $generos]);
    }
    
    public function funciones()
    {
        // Obtener los géneros desde la base de datos
        $funciones = Funciones::all();
    
        // Mostrar el formulario para crear una nueva película
        return view('usuarios.funciones', ['funciones' => $funciones]);
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required',
            'duracion' => 'required|integer',
            'genero' => 'required',
            'año' => 'required|integer',
            'director' => 'required'
        ]);
    
        // Obtener los géneros desde la base de datos
        $generos = Generos::all();
    
        // Definir la variable $genero
        $genero = Generos::where('nombre', $request->genero)->first();
    
        // Crear una nueva instancia de Peliculas y guardar los datos del formulario
        $pelicula = new Peliculas;
        $pelicula->titulo = $request->titulo;
        $pelicula->duracion = $request->duracion;
        $pelicula->año = $request->año;
        $pelicula->director = $request->director;
    
        // Guardar la película y el género asociado en la tabla de películas
        $pelicula->save();
        $pelicula->generos()->attach($genero->id);
    
        // Redirigir al usuario a la lista de películas
        return redirect()->route('peliculas.index');
    }
    
    public function create()
    {
        $generos = Generos::all();
    
        return view('formulario.create', ['generos' => $generos]);
    }
    

    

}
