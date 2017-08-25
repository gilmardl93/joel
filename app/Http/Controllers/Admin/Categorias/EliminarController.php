<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class EliminarController extends Controller
{
    public function index($id)
    {
        Categoria::where('id',$id)->delete();
        return redirect('categorias')->with('messages','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Categoria eliminada.</div>');
    }
}
