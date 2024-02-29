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
    
    <br><br>
    <form action="{{route('mensagemCad')}}" method="post">
        @csrf
        <select name="canal_id" id="canal_id" required>
            @foreach ($canais as $canal)
                <option value="{{$canal->id}}">{{$canal->titulo}}</option>
            @endforeach
        </select>
        <br>
        <input type="text" name="titulo" id="titulo" placeholder="Insira um Título Opcional a Mensagem">
        <br>
        <input type="text" name="mensagem" id="mensagem" placeholder="Insira um Título Opcional a Mensagem">
        <br><br>
        <input type="submit" value="Enviar Mensagem">
        {{session('retorno')}}
    </form>
    <br><br>

    <h1>Apresentação de Mensagens do Fórum</h1>
    @foreach($mensagens as $mensagem)
        <fieldset>
            <h3>{{$mensagem->titulo}}</h3>
            <h3>{{$mensagem->mensagem}}</h3>
            <h3>Postado por {{$mensagem->usuario->apelido}}</h3>
            <h3>{{date("d/m/Y h:i:s", strtotime($mensagem->created_at))}}</h3>
            <h4><a href="{{route('usuario.detalhes', $mensagem->usuario_id)}}">Detalhes de Usuário</a></h4>
        </fieldset>
        <br>

    @endforeach
</body>
</html>