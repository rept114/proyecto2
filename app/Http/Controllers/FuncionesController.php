<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use App\Models\Generos;
use App\Models\Generos_Pelicula;
use App\Models\Tipos_Usuario;
use App\Models\Funciones;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Collective\Html\FormFacade as Form;


class FuncionesController extends Controller
{
    
    
    public function funciones()
    {
        // Obtener los géneros desde la base de datos
        $peliculas = Peliculas::all();
    
        // Mostrar el formulario para crear una nueva película
        return view('usuarios.funciones', ['peliculas' => $peliculas]);
    }

    public function store(Request $request)
    {
        // Obtener las películas desde la base de datos
        $peliculas = Peliculas::all();
        
        // Obtener la película seleccionada por el usuario
        $pelicula = Peliculas::where('titulo', $request->pelicula)->first();
        
        // Verificar si la película existe antes de guardar la función
        if ($pelicula) {
            // Crear una nueva instancia de Funciones y guardar los datos del formulario
            $funciones = new Funciones;
            $funciones->fecha = $request->fecha;
            $funciones->hora = $request->hora;
        
            // Guardar la función y la película asociada en la tabla de películas
            $funciones->save();
            $funciones->peliculas()->attach($pelicula->id);
        
            // Redirigir al usuario a la lista de funciones
            return redirect()->route('funciones.index');
        } else {
            // Si la película no existe, redirigir al usuario de vuelta al formulario con un mensaje de error
            return redirect()->back()->with('error', 'La película seleccionada no existe.');
        }
    }
    
    public function create()
    {
        $peliculas = Peliculas::all();
    
        return view('formulario.create', ['peliculas' => $peliculas]);
    }
    
    
    

}
