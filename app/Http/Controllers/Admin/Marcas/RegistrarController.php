<?php

namespace App\Http\Controllers\Admin\Marcas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Marcas\RegistrarRequest;
use App\Models\Marca;
use Alert;

class RegistrarController extends Controller
{
    public function index(RegistrarRequest $request)
    {
        $data = new Marca();
        $data->nombre = $request->nombre;
        $data->password = bcrypt($request->password);
        $data->idusuario = 1;
        $data->save();
        Alert::success('Se registro nueva marca');
        return view('admin.marcas.index');
    }
}
