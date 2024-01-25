<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login do Funcionario</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/login_funcionario.css">
</head>
<body>

    <div class="fundo">
        <div class="row">
            <div class="col s12 m6 l5 offset-l4 login">
                <form action="#" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-content">
                            <div class="input-field">
                                <input type="email" class="black-text white" name="email_func" id="email_func" required>
                                <label for="email_func" class="black-text"><i class="material-icons">account_circle</i> Digite um E-mail Valido</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="black-text white" name="senha_func" min="6" max="8" id="senha_func" required>
                                <label for="senha_func" class="black-text"><i class="material-icons">https</i> Digite a sua senha (Nº BI)</label>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" title="Entrar" class="btn btn-floating blue waves-effect">
                                <i class="material-icons">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/materialize.min.js"></script>
</body>
</html>