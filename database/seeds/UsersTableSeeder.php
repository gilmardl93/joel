<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['email' => 'gmoreno@admisionuni.edu.pe', 'password' => bcrypt(123456), 'roles' => 'administrador', 'nombres' => 'GILMAR MARQUEZ', 'paterno' => 'MORENO', 'materno' => 'MEJIA']);
    }
}
