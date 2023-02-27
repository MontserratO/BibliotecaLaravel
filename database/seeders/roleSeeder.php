<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role2 = Role::create(['name' => 'usuario']);
        $role3 = Role::create(['name' => 'Admin']);

        DB::table('users')-> insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $user = User::find(1);
        $user -> assignRole('Admin');


        
        DB::table('users')-> insert([
            'name' => '123',
            'email' => '123@gmail.com',
            'password' => Hash::make('123'),
        ]);

        $user = User::find(1);
        $user -> assignRole('usuario');

    }
}
