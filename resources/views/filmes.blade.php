<html>
    <head>
        <title>Lista de Filmes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="title"> Lista de Filmes </h1>
            @if(session('mensagem'))
            <div class="alert alert-success">{{session('mensagem')}}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>nome</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($filmes as $filme)
                    <tr>
                        <td>{{ $filme }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-right m-2">
                <a href="/adicionar-filme" class="btn btn-success">Adicionar Filme</a>
            </div>
        </div>
    </body>
</html>