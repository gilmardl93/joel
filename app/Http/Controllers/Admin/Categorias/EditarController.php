<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class EditarController extends Controller
{
    public function index($id)
    {
        $categoria = Categoria::where('id',$id)->get();
        return view('admin.categorias.editar', compact('categoria'));
    }
}
