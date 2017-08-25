<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EliminarController extends Controller
{
    public function index($id)
    {
        User::where('id',$id)->delete();
        return redirect('usuarios')->with('messages','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Usuario eliminado.</div>');
    }
}
