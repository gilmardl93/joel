<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categorias\RegistrarCategoriaRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Categoria;
use Alert;

class RegistrarController extends Controller
{
    public function index(RegistrarCategoriaRequest $request)
    {
        $data = new Categoria();
        $data->nombre = $request->nombre;
        $data->idusuario = 1;
        $data->save();
        Alert::success('Se registro nueva categoria');
        return view('admin.categorias.index');
    }
}
