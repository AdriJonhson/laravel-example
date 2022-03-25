<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include("head")

    <title>IFGAccess - Login</title>
</head>

<body id="id-pg-login">

    @include("header")

    <div id="id-login" class="container access-capa">
        <div class="row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1 access-caixa">
                <h3 class="text-center"> Log in </h3>
                <div class="col-md-10 col-md-offset-1" id="form-login">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="post" action="{{ route('login') }}" id="formLogin" class="form-horizontal">
                        @csrf

                        <div class="form-group">

                            <input type="text" require class="form-control" name="email" placeholder="Email" :value="old('email')" required autofocus>

                        </div>

                        <div class="form-group">

                            <input type="password" require class="form-control" name="password" placeholder="Senha" required autocomplete="current-password">

                        </div>
                        <div class="">
                            <a href="{{url('forgot-password')}}">Esqueceu sua senha?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-light btn-lg"
                                    id="id-btn-login">Entrar</button>
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
