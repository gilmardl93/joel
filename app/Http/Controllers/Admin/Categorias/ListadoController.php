<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class ListadoController extends Controller
{
    public function listado()
    {
        $Lista = Categoria::all();
        $res['data'] = $Lista;
        return $res;
    }
}
