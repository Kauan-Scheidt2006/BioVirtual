<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;
use App\Models\Mensagem;
use App\Models\Noticia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CanalController extends Controller
{
    public function index(){
        $canais = Canal::all();
        
        $escolhido = Canal::first();
        $mensagens = $escolhido->mensagens;
        

        return view('forum.index', ['escolhido'=>$escolhido, 'canais' => $canais, 'mensagens' => $mensagens]);
    }

    public function mensagemCad(Request $request){
        Mensagem::create([
            'titulo' => $request->titulo,
            'mensagem' => $request->mensagem,
            'usuario_id' => Auth::id(),
            'canal_id' => $request->canal_id
        ]);

        

        return redirect()->route('biovirtual.index')
        ->with('retorno', 
        'Mensagem Cadastrada com Sucesso, Obrigado por ajudar a crescer e enriquecer nosso fórum');
    }

    public function usuarioDetalhes($id){
        $usuario = User::find($id);

        return view('forum.usuario', ['usuario'=>$usuario]);
    }
}
