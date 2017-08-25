<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.usuarios.index');
    }
}
