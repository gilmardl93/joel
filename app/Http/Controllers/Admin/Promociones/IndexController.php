<?php

namespace App\Http\Controllers\Admin\Promociones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.promociones.index');
    }
}
