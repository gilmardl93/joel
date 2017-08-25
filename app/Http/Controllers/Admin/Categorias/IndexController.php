<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.categorias.index');
    }
}
