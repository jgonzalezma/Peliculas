<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public $table = 'directores';

    public function peliculas(){
    	return $this->hasMany(Pelicula::class);
    }
}
