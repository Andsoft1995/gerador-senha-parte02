<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SGS</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo" title="Sistema de Gerador de Senhas">SGS (AKIRA.AO)</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="{{ url('/login_funcionario') }}"><i class="material-icons left">security</i> Reservada</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="fundo">

        <div class="row">
            <div class="container">
                <article class="col s12 m6 l7">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header black white-text" style="font-size: 18px;">
                                <i class="material-icons">airline_seat_legroom_reduced</i> Lista de Atendimento <i class="material-icons right">arrow_drop_down</i>
                            </div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="col s12 m3 l9 offset-l2">
                                        <div class="card-panel">
                                            <h6 class="white-text center">SENHA Nº 01 | SERVIÇO 02 <br> 
                                                <span class="green-text black atendimento">Em atendimento</span> <br> <span class="white-text">Tempo de Espera</span></h6>
                                        </div>
                                        <div class="card-panel">
                                            <h6 class="white-text center">SENHA Nº 02 | SERVIÇO 03 <br> 
                                                <span class="green-text black">Em atendimento</span><br> <span class="white-text">Tempo de Espera</span></h6>
                                        </div>
                                        <div class="card-panel">
                                            <h6 class="white-text center">SENHA Nº 03 | SERVIÇO 06 <br> 
                                                <span class="green-text black">Em atendimento</span><br> <span class="white-text">Tempo de Espera</span></h6>
                                        </div>
                                        <div class="card-panel">
                                            <h6 class="white-text center">SENHA Nº 04 | SERVIÇO 09 <br> 
                                                <span class="green-text black">Em atendimento</span><br> <span class="white-text">Tempo de Espera</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="collapsible-header offset-l3 black white-text" style="font-size: 18px;">
                                <i class="material-icons">airline_seat_recline_extra</i> Lista de Espera <i class="material-icons right">arrow_drop_down</i>
                            </div>
                            <div class="collapsible-body">
                                <p class="white-text">Total: 20</p>
                                @for ($i = 1; $i <= 3; $i++)
                                    <div class="row">
                                        <div class="col s12 m3 l9 offset-l2">
                                            <div class="card-panel">
                                                <h5 class="center espera">Senha nº 01 <br> Serviço 04 <br> <span class="red-text black">Em espera...</span> <br> 15min</h5>
                                            </div> 
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="green">
                                <div class="progress">
                                    <div class="indeterminate" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- LISTA DE ESPERA --}}
                    
                    <ul class="collapsible" data-collapsible="accordion">
                        
                    </ul>
                    
                </article>
                <aside class="col s12 m6 l5">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">settings</i> Serviços disponiveis <i class="material-icons right">arrow_drop_down</i>
                            </div>
                            <div class="collapsible-body">
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Abertura de Conta</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Levantamento</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Deposito</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Consulta</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Extrato</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Cartao Multicaixa</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Seguros</a>
                                <a href="#modal-pergunta" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Agendamento</a>
                                <a href="#modal-senha" style="margin-top: 5px;" class="btn waves-effect blue text-left modal-trigger">Consultar Senha</a>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">forum</i> Deixe seu Feedback <i class="material-icons right">arrow_drop_down</i>
                            </div>
                            <div class="collapsible-body">
                                <h6 class="white-text">O que achou do Atendimento?</h6>
                                <form action="#" method="post">
                                    @csrf
                                    <input type="checkbox" name="rapido" id="rapido">
                                    <label for="rapido" class="white-text">Rapido</label>
                                    <br>
                                    <input type="checkbox" name="lento" id="lento">
                                    <label for="lento" class="white-text">Lento</label>
                                    <br>
                                    <input type="checkbox" name="razuavel" id="razuavel">
                                    <label for="razuavel" class="white-text">Razuavel</label>
                                    <div class="input-field">
                                        <textarea name="coment" id="comentario" class="materialize-textarea white black-text" cols="30" rows="10"></textarea>
                                        <label for="comentario">Comente aqui...</label>
                                        <button type="submit" title="Enviar Feedback" class="btn btn-floating waves-effect blue">
                                            <i class="material-icons">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">build</i> Acessibilidade <i class="material-icons right">arrow_drop_down</i>
                            </div>
                            <div class="collapsible-body">
                                <p class="white-text">Idiomas e Acessibilidade</p>
                            </div>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>

    </div>

    {{-- MODAL 01 --}}
    <div class="col s12 m6 l5 pergunta">
        <div class="modal" id="modal-pergunta">
            <div class="modal-content">
                <h5 class="white-text center">Tens Certeza que deseja este serviço?</h5>
            </div>
            <div class="modal-footer">
                <a href="{{url('/abertura_conta')}}" id="sim" class="btn waves-effect blue modal-close">Sim, tenho</a>
                <a href="#" id="cancelar" class="btn waves-effect red modal-close">Cancelar</a>
            </div>
        </div>
    </div>
    {{-- MODAL 02 - CONSULTA DE SENHA --}}
    <div class="col s12 m6 l5 pergunta">
        <div class="modal" id="modal-senha">
            <div class="modal-footer">
                <h5 class="black-text center">
                    <i class="material-icons">library_books</i> Consultar Minha Senha</h5>
            </div>
            <div class="modal-content">
                <div class="row">
                    <form action="#" method="post">
                        @csrf
                        <div class="input-field">
                            <input type="search" min="14" max="14" class="black-text" name="pesq_senha" id="pesq_senha" required>
                            <label for="pesq_senha" class="white-text"><i class="material-icons">search</i> Por favor, digite o seu nº do BI para pesquisar sua senha</label>
                        </div>
                        <div class="input-field">
                            <button id="senha" title="Pesquisar minha senha" class="btn btn-floating waves-effect blue modal-close"><i class="material-icons">search</i></button>
                            <a href="#" id="cancelamento" class="btn btn-floating waves-effect red modal-close"><i class="material-icons">cancel</i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    

    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script>
        $("#rapido").click(function(){
            Materialize.toast('Agradecemos pelo seu feedback', 4000)
        });
        $("#lento").click(function(){
            Materialize.toast('Agradecemos pelo seu feedback', 4000)
        });
        $("#razuavel").click(function(){
            Materialize.toast('Agradecemos pelo seu feedback', 4000)
        });
        $("#cancelar").click(function(){
            Materialize.toast('Serviço Cancelado', 4000)
        });
        $("#sim").click(function(){
            Materialize.toast('Por favor, aguarde esquanto lhe direcionamos em outra pagina', 4000)
        });
        $("#rapido #lento #razuavel #bom #muito_bom").click(function(){
            Materialize.toast('Agradecemos pelo seu feedback!!!', 4000)
        });
        $("#senha").click(function(){
            Materialize.toast('Por favor, aguarde um momento', 4000)
        });
        $("#cancelamento").click(function(){
            Materialize.toast('Pesquisa Cancelada!!!', 4000)
        });
        $('.modal').modal();
    </script>
</body>
</html>