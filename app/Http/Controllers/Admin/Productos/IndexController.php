<?php

namespace App\Http\Controllers\Admin\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.productos.index');
    }
}
