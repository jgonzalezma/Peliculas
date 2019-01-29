<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = 'peliculas';
    public function director(){
    	return $this->belongsTo(Director::class);
    }
}
