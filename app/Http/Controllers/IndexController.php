<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use App\Models\Generos;
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
        return view('usuarios.peliculas');
    }

    public function store(Request $request)
    {
        $pelicula = new Peliculas();
        $genero = new Generos();
        $pelicula->titulo = $request->input('titulo');
        $pelicula->duracion_minutos = $request->input('duracion_minutos');
        $genero->genero = $request->input('genero');
        $pelicula->año = $request->input('año');
        $pelicula->director = $request->input('director');
        $pelicula->save();

        return redirect()->route('peliculas.store')->with('success', 'Pelicula creada satisfactoriamente');
    }

}
