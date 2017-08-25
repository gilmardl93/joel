<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ListadoController extends Controller
{
    public function listado()
    {
        $Lista = User::all();
        $res['data'] = $Lista;
        return $res;
    }
}
