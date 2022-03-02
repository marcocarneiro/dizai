<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .cabecalho{
            height: 110px;
            border-bottom: 1px solid #ccc;
            box-shadow: 0 0 10px #bbb;
        }
        .conteudo{
            margin-top: 120px;
        }

        .botao-flutuante{
            display:block;
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 70px;
            height: 70px;
            border: none;
            font-size: 35px;
            color: #fff;
            border-radius: 50%;
            box-shadow: 5px 5px 5px #aaa;
        }
        .avatar {
            font-size: 80px;
        }

    </style>

    <title>DIZ AÍ!!</title>
  </head>
  <body>
    <div class="cabecalho p-3 bg-white fixed-top">
        <h1 class="text-center text-warning m-0">
            DIZ AÍ
        </h1>
        <p class="m-0 text-center text-secondary">
            Fale o que der na telha mas seja educado.
        </p>
    </div>

    <!-- conteúdo -->
    <div class="container conteudo">
        <div class="col-md-8 offset-md-2">
            
            <!-- conteúdo dinâmico, vem do BD  -->
            @if (count($comentarios) === 0)
                <p class="text-center">Não há comentários para exibir, ninguém publicou :-(  </p>
            @else
                @foreach ($comentarios as $comentario)  
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <span class="avatar text-warning"><i class="{{$comentario->espirito}}"></i></span> 
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">{{$comentario->codinome}}</h5>
                                    <p class="card-text"> 
                                        {{$comentario->comentario}}
                                    </p>
                                    <p class="text-secondary">
                                        Publicado em {{ Carbon\Carbon::parse($comentario->created_at)->format('d/m/Y H:i:s') }}
                                    </p>
                                </div>
                            </div>                    
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>


    <button type="button" class="botao-flutuante bg-warning" data-bs-toggle="modal" data-bs-target="#modalFormulario">
        +
    </button>

    
    <div class="modal fade" id="modalFormulario" tabindex="-1" aria-labelledby="modalFormularioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormularioLabel">DIZ AÍ!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('novocomentario') }}">
                        @csrf                    
                        <input class="form-control" type="text" placeholder="Codinome" name="codinome" required>
                        <br>
                        <p>Seu estado de espírito</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espirito" value="far fa-grin-tongue" required>
                            <label class="form-check-label"><i class="far fa-grin-tongue fa-2x"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espirito" value="far fa-grin-beam" required>
                            <label class="form-check-label"><i class="far fa-grin-beam fa-2x"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espirito" value="far fa-sad-tear" required>
                            <label class="form-check-label"><i class="far fa-sad-tear fa-2x"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espirito" value="far fa-surprise" required>
                            <label class="form-check-label"><i class="far fa-surprise fa-2x"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espirito" value="far fa-angry" required>
                            <label class="form-check-label"><i class="far fa-angry fa-2x"></i></label>
                        </div>
                        
                        <br><br>
                        <label for="comentario" class="form-label">Diz Aí!!</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
                        
                        <br>
                        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>