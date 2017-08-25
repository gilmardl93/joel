<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Usuarios\RegistrarRequest;
use App\User;
use Alert;

class RegistrarController extends Controller
{
    public function index(RegistrarRequest $request)
    {
        $data = new User();
        $data->paterno = strtoupper($request->paterno);
        $data->materno = strtoupper($request->materno);
        $data->nombres = strtoupper($request->nombres);
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->roles = 'administrador';
        $data->save();
        Alert::success('Se registro nuevo usuario');
        return view('admin.usuarios.index');
    }
}
