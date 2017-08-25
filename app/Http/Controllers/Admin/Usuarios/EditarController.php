<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EditarController extends Controller
{
    public function index($id)
    {
        $usuario = User::where('id',$id)->get();
        return view('admin.usuarios.editar', compact('usuario'));
    }
}
