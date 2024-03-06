<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('listar.usuarios')}}">Lista de Usuários</a>
    @if(Auth::user()->nivel_id === 1)
    
    <a href="{{route('canal.create')}}">Criar Novo Canal</a>
    <form action="{{route('noticiaCad')}}" method="post">
        @csrf
            <input type="hidden" name="canal_id" value="{{$escolhido->id}}">
            
        <br>
        <input type="text" name="titulo" id="titulo" placeholder="Insira um Título Mensagem">
        <br>
        <input type="text" name="noticia" id="noticia" placeholder="Insira a Notícia a Nova Notícia">
        <br><br>
        <input type="submit" value="Enviar Notícia">
        {{session('retorno')}}
    </form>

    @endif
    
    <h1>No Canal {{$escolhido->titulo}}</h1>
    <h2>Descrição {{$escolhido->descricao}}</h2>
    
    <br>
    
    <form action="{{route('biovirtual.index')}}" method="post">
        @csrf
        <select name="canal_id" id="canal_id" required>
            @foreach ($canais as $canal)
                <option value="{{$canal->id}}">{{$canal->titulo}}</option>
            @endforeach
        </select>
        <input type="submit" value="Entrar no Fórum">
    </form>
    <br>
    <form action="{{route('mensagemCad')}}" method="post">
        @csrf
            <input type="hidden" name="canal_id" value="{{$escolhido->id}}">
            
        <br>
        <input type="text" name="titulo" id="titulo" placeholder="Insira um Título Opcional a Mensagem">
        <br>
        <input type="text" name="mensagem" id="mensagem" placeholder="Insira a Mensagem a Nova Mensagem">
        <br><br>
        <input type="submit" value="Enviar Mensagem">
        {{session('retorno')}}
    </form>



    <br>
    <h1>Apresentação de Notícias do Fórum</h1>

   @forelse ($noticias as $noticia)
       
   @empty
       <h2>O Canal Está Sem Notícias Até o Momento</h2>
   @endforelse
   <br><br>
    <h1>Apresentação de Mensagens do Fórum</h1>
    @forelse($mensagens as $mensagem)
        <fieldset>
            <h3>{{$mensagem->titulo}}</h3>
            <h3>{{$mensagem->mensagem}}</h3>
            <h3>Postado por {{$mensagem->usuario->apelido}}</h3>
            <h3>{{date("d/m/Y h:i:s", strtotime($mensagem->created_at))}}</h3>
            <h4><a href="{{route('usuario.detalhes', $mensagem->usuario_id)}}">Detalhes de Usuário</a></h4>
        </fieldset>
        <br>

    @empty
        <h3>Sem Mensagens Cadastradas no Canal Até o Momento</h3>
    @endforelse
</body>
</html>