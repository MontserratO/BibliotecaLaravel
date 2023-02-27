<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores') ->insert([
            'Nombres' => 'Veronica Leticia',
            'ApellidoPat' => 'Ojeda',
            'ApellidoMat' => 'Vega',
        ]);
        DB::table('profesores') ->insert([
            'Nombres' => 'Leticia Veronica',
            'ApellidoPat' => 'Vega',
            'ApellidoMat' => 'Ojeda',
        ]);
        DB::table('profesores') ->insert([
            'Nombres' => 'Vero Lecia',
            'ApellidoPat' => 'Ojega',
            'ApellidoMat' => 'Veda',
        ]);
    }
}
