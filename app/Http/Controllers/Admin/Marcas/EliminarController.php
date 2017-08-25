<?php

namespace App\Http\Controllers\Admin\Marcas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marca;

class EliminarController extends Controller
{
    public function index($id)
    {
        Marca::where('id',$id)->delete();
        return redirect('marcas')->with('messages','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Marca eliminada.</div>');
    }
}
