<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Novo Canal</h1>
    <form action="{{route('canal.store')}}" method="post">
        @csrf
        <input type="text" name="titulo" placeholder="Insira um Novo Título ao Novo Canal" required>
        <br><br>
        <input type="text" name="descricao" placeholder="Insira uma Descrição ao Novo Canal" required>
        <br><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>