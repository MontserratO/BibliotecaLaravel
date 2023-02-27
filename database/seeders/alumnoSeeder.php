<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('alumnos') ->insert([
            'Nombres' => 'Montserrat Guadalupe',
            'ApellidoPat' => 'Galvan',
            'ApellidoMat' => 'Ojeda',
            'Edad' => '20',
            'Grado'=> '6',
            'Grupo'=> 'D',
        ]);
        DB::table('alumnos') ->insert([
            'Nombres' => 'Guadalupe Montserrat ',
            'ApellidoPat' => 'Ojeda',
            'ApellidoMat' => 'Galvan',
            'Edad' => '5',
            'Grado'=> '1',
            'Grupo'=> 'A',
        ]);
        DB::table('alumnos') ->insert([
            'Nombres' => 'Serrat Dalu',
            'ApellidoPat' => 'Galda',
            'ApellidoMat' => 'Ojevan',
            'Edad' => '10',
            'Grado'=> '3',
            'Grupo'=> 'D',
        ]);
    }
}
