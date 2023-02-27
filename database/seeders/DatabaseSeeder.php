<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([libroSeeder::class,]);
        $this->call([alumnoSeeder::class,]);
        $this->call([profesorSeeder::class,]);
        $this->call([prestamoSeeder::class,]);
        $this->call([devolucionesSeeder::class,]);
        $this->call([roleSeeder::class,]);
    }
}
