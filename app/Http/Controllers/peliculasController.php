<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class peliculasController extends Controller
{
    public function listarPeliculas(){
    	$peliculas = Pelicula::all();
    	return view('listaPeliculas')->with([
    		'peliculas'=>$peliculas
    	]);
    }
    public function createPelicula(Request $request){
    	$pelicula = new Pelicula();
    	$pelicula->nombre = $request->input('nombre');
        $pelicula->duracion = $request->input('duracion');
    	$pelicula->director_id = $request->get('director');
    	$pelicula->save();
        return back();
    }
}
