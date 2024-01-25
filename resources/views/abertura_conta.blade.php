<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abertura de Conta</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/abertura_conta.css">
</head>
<body>

    <div class="fundo">
        <div class="row">
            <div class="col s12 m3 l4 offset-l4 form_conta">
                <div class="card">
                    <div class="card-content">
                        <p class="black-text"><b>ID:</b> 1</p>
                        <p class="black-text"><b>SERVIÇO:</b> Abertura de Conta</p>
                        <p class="black-text"><b>SENHA Nº:</b> 02</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('/') }}" id="imprime_senha" title="Imprimir senha" class="btn btn-floating blue waves-effect">
                            <i class="material-icons">print</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script>
        $("#imprime_senha").click(function(){
            Materialize.toast('Por favor, retire a sua senha e aguarde a chamada de sua senha', 4000)
        });
    </script>
</body>
</html>