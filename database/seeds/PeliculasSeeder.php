<?php

use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            'nombre' => 'Mad Max',
            'duracion' => 120,
            'director_id' => 1
        ]);
        DB::table('peliculas')->insert([
            'nombre' => 'Star Wars',
            'duracion' => 142,
            'director_id' => 2
        ]);
        DB::table('peliculas')->insert([
            'nombre' => 'The odyssey',
            'duracion' => 135,
            'director_id' => 1
        ]);
    }
}
