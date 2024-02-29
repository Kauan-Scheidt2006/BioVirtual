<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    <h1>Detalhes do Usuário {{$usuario->apelido}}</h1>
    <h2>Nome {{$usuario->nome}}</h2>
    <h2>E-mail {{$usuario->email}}</h2>
    <h2>Entrou em {{date("d/m/Y", strtotime($usuario->created_at))}}</h2>
</div>
