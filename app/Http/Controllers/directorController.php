<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class directorController extends Controller
{
    public function createDirector(Request $request){
    	$director = new Director();
    	$director->nombre = $request->input('nombre');
    	$director->save();
        return redirect('/');
    }
    public function listarDirectores(){
    	$directores = Director::all();
    	return view('nuevaPelicula')->with([
    		'directores'=>$directores
    	]);
    }
}
