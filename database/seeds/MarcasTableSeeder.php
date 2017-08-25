<?php

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(['idusuario' => 1 , 'imagen' => 'avatar/nofoto.png', 'nombre' => 'SAMSUNG']);
        Marca::create(['idusuario' => 1 , 'imagen' => 'avatar/nofoto.png', 'nombre' => 'LG']);
        Marca::create(['idusuario' => 1 , 'imagen' => 'avatar/nofoto.png', 'nombre' => 'SONY']);
        Marca::create(['idusuario' => 1 , 'imagen' => 'avatar/nofoto.png', 'nombre' => 'LENOVO']);
        Marca::create(['idusuario' => 1 , 'imagen' => 'avatar/nofoto.png', 'nombre' => 'MOTOROLA']);
    }
}
