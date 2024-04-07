<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js',])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integridade="sha384-kenU1KFdBIe4zVFQWjxhNVA3FJPliEoLevIkEM+KOJ8ySFVkJW84SXCWjUyLkNwT" crossorigin="anonymous"> </script>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        font-family: Roboto, sans-serif;
        font-weight: 400;
    }
    a{
        text-decoration: none;
        color: inherit;
    }
    .container-todo{
        height: 100vh;
        width: 100vw;

        display: flex;
        align-items: center;
        justify-content: center;

    }

    .box-pessoas{
        display: flex;
        justify-content: space-between;
        border: solid 1px #ccc;
        border-radius: 5px;
        align-items: center;
    }
    .container-p{
        border: solid 1px #ccc;
        border-radius: 5px;
        max-width: 1200px;
        width: 100%;
        height: 700px;
    }
</style>
<body>
    {{-- {{dd($data)}} --}}
    <div class="container-todo">
        <div class="container-p">
            <h3 class="m-3">Consulta de Pessoas</h3>
            <div class="">
                <div class="">
                    @foreach ($data as $item)
                        @if ($item->id !== 0)
                            <div class=" box-pessoas my-2 p-2 m-3">
                                <div><span class="">Nome:</span>{{$item->name}}</div>
                                <div class="b">
                                    <button type="button" class="btn btn-primary p-1 px-4" data-bs-toggle="modal" data-bs-target="#clientes_{{$item->id}}">
                                        Ver
                                    </button>
                                </div>
                            </div>

                            <div id="clientes_{{$item->id}}" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h2>{{$item->name}} - {{$item->company->name}}</h2>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Pessoa</h4>
                                            <hr>
                                            <div><strong>NOME:      </strong>{{strtoupper($item->name)}}</div>
                                            <div><strong>USUARIO:   </strong>{{strtoupper($item->username)}}</div>
                                            <div><strong>EMAIL:     </strong>{{strtoupper($item->email)}}</div>
                                            <hr>
                                            <h4>Empresa</h4>
                                            <hr>
                                            <div><strong>EMPRESA:     </strong>{{strtoupper($item->company->name)}}</div>
                                            <div><strong>VISAO:     </strong>{{strtoupper($item->company->catchPhrase)}}</div>
                                            <div><strong>OBJETIVO:     </strong>{{strtoupper($item->company->bs)}}</div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <p class="text-center m-2 text-muted fw-bold fs-7">Fabricado Por: Testes dos Santos Lit.</p>
        </div>
    </div>

</body>
</html>
