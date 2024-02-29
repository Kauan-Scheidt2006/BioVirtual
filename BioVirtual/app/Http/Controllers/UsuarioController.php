<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function listarUsuarios(){
        $usuarios = User::orderBy("nivel_id", "DESC")->where('id', "!=", Auth::user()->id)->get();
        

        return view('forum.listarUsuarios', ['usuarios' => $usuarios]);
    }

    public function adminCad(Request $request){
        $usuario = User::find($request->usuario_id);
        $usuario->nivel_id = 1;
        $usuario->save();

        return redirect()->route("listar.usuarios")->with("admin", "Foi Registrado $usuario->apelido como Administrador");
    }
}
