<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
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
}
