<html>
    <head>
        <title>Adicionar Filme</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Adicionar Filme</h2>
            <form id="adicionarFilme" name="adicionarFilme" method="POST" class="card card-sm">
                @csrf
                <div class="card-body">
                    
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"/> {{--A função old('nome_do_campo') guarda o valor inserido no form--}}
                    @error('titulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="classificacao">Classificação</label>
                <input class="form-control" type="text" name="classificacao" id="classificacao" value="{{ old('classificacao') }}"/>
                    @error('classificacao')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="premios">Prêmios</label>
                    <input class="form-control" type="text" name="premios" id="premios"  value="{{ old('premios') }}"/>
                    @error('premios')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="duracao">Duração</label>
                    <input class="form-control" type="text" name="duracao" id="duracao" value="{{ old('duracao') }}"/> 
                    @error('duracao')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Data de estreia</label>
                    <div class="d-flex justify-content-between">
                        <select class="form-control col-sm-4" name="dia">
                            <option value="">Dia</option>
                            <?php for ($i=1; $i < 32; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="form-control col-sm-4" name="mes">
                            <option value="">Mês</option>
                            <?php for ($i=1; $i < 13; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="form-control col-sm-4" name="ano">
                            <option value="">Ano</option>
                            <?php for ($i=1900; $i < 2017; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    @error('dia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('mes')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('ano')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label>Gêneros</label>
                    <select  class="form-control" name="genre_id">
                        <option value="">Selecione um filme</option>
                        @foreach($genres->sortBy('name') as $genre)
                            <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-success" value="Adicionar Filme" name="submit"/>
            </div>
            </form>
        </div>
    </body>
</html>