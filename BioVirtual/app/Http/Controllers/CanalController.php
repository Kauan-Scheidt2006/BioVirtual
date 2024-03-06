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
    public function index(Request $request){
        $canais = Canal::all();
    
        if(empty($request->canal_id))
            $escolhido = Canal::first();
    
        else
            $escolhido = Canal::find($request->canal_id);

        $mensagens = $escolhido->mensagens;
        
        $noticias = $escolhido->noticias;
        

        return view('forum.index', 
        ['escolhido'=>$escolhido, 'canais' => $canais, 'mensagens' => $mensagens, 'noticias'=>$noticias]);
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
    public function noticiaCad(Request $request){
        Noticia::create([
            'titulo' => $request->titulo,
            'noticia' => $request->noticia,
            'usuario_id' => Auth::id(),
            'canal_id' => $request->canal_id
        ]);
        return redirect()->route('biovirtual.index')
        ->with('retorno', 
        'Notícia Cadastrada com Sucesso, Obrigado por ajudar a crescer e enriquecer nosso fórum');
    }
    public function usuarioDetalhes($id){
        $usuario = User::find($id);

        return view('forum.usuario', ['usuario'=>$usuario]);
    }

    public function canalCreate(){
        return view('forum.registro');
    }

    public function canalStore(Request $request){
        if(!empty($request->user()->nivel_id)  && $request->user()->nivel_id === 1){
            $canal = new Canal();

            $canal->titulo = $request->titulo;
            $canal->descricao = $request->descricao;
            $canal->usuario_id = $request->user()->id;

            $canal->save();
        }
        
        return redirect()->route('biovirtual.index');
    }
}
