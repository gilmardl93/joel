<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Pedido;

class IndexController extends Controller
{
    public function index()
    {
        $productos = Producto::count();
        $categorias = Categoria::count();
        $marcas = Marca::count();
        $pedidos = Pedido::count();
        return view('admin.principal.index', compact(['productos', 'categorias', 'marcas', 'pedidos']));
    }
}
