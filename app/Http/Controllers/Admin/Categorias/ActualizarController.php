<?php

namespace App\Http\Controllers\Admin\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class ActualizarController extends Controller
{
    public function actualizar(Request $request)
    {
        $categoria = Categoria::where('id',$request->id)->update(['nombre' => $request->nombre ]);
        return redirect('categorias')->with('messages','<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Categoria Actualizada.</div>');
    }
}
