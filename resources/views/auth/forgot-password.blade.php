<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include("head")

    <title>IFGAccess - Esqueceu sua senha?</title>
</head>

<body id="id-pg-senha">

@include("header")

<div id="id-senha" class="container access-capa">
    <div class="row">
        <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1 access-caixa">
            <h3 class="text-center">Recuperação</h3>
            <div class="col-md-10 col-md-offset-1" id="form-login">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">

                        <input type="text" name="email" class="form-control" id="inputUsuario" placeholder="Email">

                    </div>

                    <div class="">
                        <a href="{{url('login')}}">Voltar para Login</a>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-light btn-lg"
                           id="id-btn-login">Confirmar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center" id="id-direitos">
        <p> © 2019 IFGAccess | Desenvolvimento: IFG </p>
    </div>
</div>

</body>
</html>
