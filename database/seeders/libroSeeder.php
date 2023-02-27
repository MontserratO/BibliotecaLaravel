<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros') ->insert([
            'Titulo' => 'El resplandor',
            'name' => 'elresplandor.jpg',
            'path' => 'public/elresplandor.jpg',
            'Autor' => 'Stephen King',
            'Editorial' => 'De Bolsillo',
            'Categoria' => 'Terror',
            'Disponibilidad'=> '1',
        ]);
        DB::table('libros') ->insert([
            'Titulo' => 'Cementerio de animales',
            'name' => 'cementerio.jpg',
            'path' => 'public/cementerio.jpg',
            'Autor' => 'Stephen King',
            'Editorial' => 'De Bolsillo',
            'Categoria' => 'Terror',
            'Disponibilidad'=> '1',
        ]);
        DB::table('libros') ->insert([
            'Titulo' => 'Eso',
            'name' => 'eso.jpg',
            'path' => 'public/eso.jpg',
            'Autor' => 'Stephen King',
            'Editorial' => 'De Bolsillo',
            'Categoria' => 'Terror',
            'Disponibilidad'=> '1',
        ]);
    }
}
