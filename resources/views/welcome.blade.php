<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IFGAccess - Dashboard</title>

    @include("head")
</head>
<body class="antialiased">
    @include("header")

    <div class="container access-capa">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 access-apresentacao">
                <h1 class="text-center">
                    Sistema de Controle de Acesso
                </h1>
                <hr>
                <p class="text-center">
                    Com IFGAccess é possível gerenciar e controlar os acessos realizados aos laboratórios
                    do Instituto Federal de Goiás - Câmpus Formosa.
                </p>

                <div id="btn-1" class="col-md-6">
                    <a href="/acessos" class="btn btn-outline-light btn-lg text-center">
                        Ver Lista de Acessos
                    </a>
                </div>

                <div id="btn-2" class="col-md-6">
                    <a href="/login" class="btn btn-outline-light btn-lg text-center">
                        Login de Administrador
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include("footer")
</body>
</html>
