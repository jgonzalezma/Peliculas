<?php

use Illuminate\Database\Seeder;

class DirectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directores')->insert([
            'nombre' => 'Tarantino'
        ]);
        DB::table('directores')->insert([
            'nombre' => 'George Lucas'
        ]);
        DB::table('directores')->insert([
            'nombre' => 'Steven Spielberg'
        ]);
    }
}
