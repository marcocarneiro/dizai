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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                Avatar 
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title">Codinome do usuário</h5>
                                <p class="card-text"> 
                                    Um texto qualquer no calor do momento.
                                </p>
                                <p class="text-secondary">
                                    Publicado em 99/99/9999
                                </p>
                            </div>
                        </div>                    
                    </div>
                </div>
            @endif

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>