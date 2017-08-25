<?php

namespace App\Http\Controllers\Admin\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ActualizarController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('password'))
        {
            User::where('id',$request->id)->update([
                            'nombres' => $request->nombres,
                            'paterno' => $request->paterno,
                            'materno' => $request->materno,
                            'email' => $request->email,
                            'password' => $request->password                            
                            ]);
            return redirect('usuarios')->with('messages','<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Usuario Actualizado.</div>');
        }else 
        {
            User::where('id',$request->id)->update([
                            'nombres' => $request->nombres,
                            'paterno' => $request->paterno,
                            'materno' => $request->materno,
                            'email' => $request->email                         
                            ]);
            return redirect('usuarios')->with('messages','<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Usuario Actualizado.</div>');
        }
    }
}
