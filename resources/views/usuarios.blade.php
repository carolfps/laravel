<html>
    <head>
        <title>Lista de Usuários</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="title"> Lista de Usuários </h1>
            @if(session('mensagem'))
            <div class="alert alert-success"> {{session('mensagem')}}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>nome</td>
                        <th>email</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario['name'] }}</td>
                        <td>{{ $usuario['title'] }}</td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="2"><i>Nenhum registro encontrado</i></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $usuarios->links() }}
            <div class="text-right m-2">
                <a href="/adicionar-usuario" class="btn btn-success">Adicionar Usuario</a>
            </div>
        </div>
    </body>
</html>