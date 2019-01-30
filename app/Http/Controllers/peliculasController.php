<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class peliculasController extends Controller
{
    public function listarPeliculas(){
		$peliculas = Pelicula::all();
		$peliculas = Pelicula::orderBy('nombre', 'asc')->get();
		$numPeliculas = count($peliculas);
		$avgDuracion = [];
		foreach($peliculas as $pelicula){
			array_push($avgDuracion, $pelicula->duracion);
		}
		$avgTotal = avg($avgDuracion);
    	return view('listaPeliculas')->with([
			'peliculas'=>$peliculas,
			'numPeliculas' => $numPeliculas
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
