<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['idusuario' => 1 ,'nombre' => 'CELULARES']);
        Categoria::create(['idusuario' => 1 ,'nombre' => 'TABLETS']);
    }
}
