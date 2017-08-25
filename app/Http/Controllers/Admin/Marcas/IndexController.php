<?php

namespace App\Http\Controllers\Admin\Marcas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marca;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.marcas.index');
    }
}
