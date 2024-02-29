<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

    <h1>Lista de Usuários Cadastrados no Fórum</h1>
    <h2>{{session('admin')}}</h2>
    <table border="1px">
    <tr>
        <th>Nome</th> <th>Apelido</th> <th>E-mail</th>
    </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->nome}}</td> <td>{{$usuario->apelido}}</td>  <td>{{$usuario->email}}</td> 
        @if(auth()->user()->nivel_id == 1  && $usuario->nivel_id != 1)
            <td>
                <form action="{{route('adminCad')}}" method="post">
                    @csrf
                    <input type="hidden" name="usuario_id" value="{{$usuario->id}}">
                    <input type="submit" value="Promover Usuário a Administrador">
                </form>
            </td>
            @else
                <td>Usuário Administrador</td>
        @endif
        </tr>
    @endforeach
</table>
</div>
