<?php

namespace App\Http\Controllers\Admin\Marcas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marca;

class ListadoController extends Controller
{
    public function index()
    {
        $lista = Marca::all();
        $res['data'] = $lista;
        return $res;
    }
}
