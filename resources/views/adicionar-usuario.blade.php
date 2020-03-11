<html>
    <head>
        <title>Adicionar Usuário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="title"> Adicionar Usuário </h1>
            <form class="card card-sm" id="adicionar-usuario" name="adicionar-usuario" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input class="form-control" type="text" name="name" id="name"/>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email"/>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input class="form-control" type="password" name="password" id="password"/>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Senha</label>
                    <input class="form-control" type="password" name="password_confirmation" id="confirm-password"/>
                </div>
            </div>
            <div class="card-footer text-right">
                    <input class="btn btn-success" type="submit" value="Adicionar Usuário" name="submit"/>
                </div>
            </form>
        </div>
    </body>
</html>