<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Reservado</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/painel_reservado.css">
</head>
<body>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo">SGS (akira.ao)</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class="dropdown-button" data-activates="dropdown1">
                        <div class="chip">
                            Usuario 01
                            <img src="/img/user_name.png" alt="">
                        </div>
                        <i class="material-icons right">arrow_drop_down</i>
                    </a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="fundo">
        <a href="#" data-activates="slide-out" class="button-collapse btn blue btn-floating"><i class="material-icons">menu</i></a>
    </div>

    {{-- MENU DROPDOWN --}}
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#" class="black-text">Definições</a></li>
        <li><a href="#" class="black-text">Terminar Sessão</a></li>
    </ul>

    {{-- MENU DROPDOWN DE RELATORIOS --}}
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="#" class="black-text">Fluxo Atendimento</a></li>
        <li><a href="#" class="black-text">Tempo Medio de Espera</a></li>
        <li><a href="#" class="black-text">Feedbacks</a></li>
    </ul>

    {{-- SIDENAV --}}
    <ul id="slide-out" class="side-nav">
        <li><div class="user-view">
          <div class="background">
            <img src="/img/BNA.jpg">
          </div>
          <a href="#user"><img class="circle" src="/img/user_name.png"></a>
          <a href="#name"><span class="white-text name">Usuario 01</span></a>
          <a href="#email"><span class="white-text email">usuario01.akira.ao</span></a>
        </div></li>

        <li><a href="#"><i class="material-icons">equalizer</i>Estatistica</a></li>
        <li><a href="#" data-activates="dropdown2" class="dropdown-button"><i class="material-icons">assignment</i>Relatorios</a></li>
        <li title="Chamar usuario por senha"><a href="{{ url('/lista_atendidos') }}"><i class="material-icons">directions_walk</i>Atendimentos</a></li>
        <li><a href="#modal_chamar_servico" class="modal-trigger"><i class="material-icons">pan_tool</i>Lista de Espera</a></li>
    </ul>

    {{-- CHAMAR UTENTE POR SERVIÇO --}}
    <div class="row">
        <div id="modal_chamar_servico" class="modal">
            <div class="modal-footer">
                <h5 class="black-text center">Chamar usuarios em Espera por Serviço</h5>
            </div>
            <div class="modal-content">
                <form action="{{ url('/lista_espera') }}" method="post">
                    @csrf
                    <div class="input-field">
                        <select id="servico" class="servico white" required>
                            <option value="" disabled selected>SELECIONE O SERVIÇO A ATENDER</option>
                            <option value="Abertura de Conta">Abertura de Conta</option>
                            <option value="Levantamento">Levantamento</option>
                            <option value="Extrato">Extrato</option>
                            <option value="Consulta">Consulta</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <button type="submit" class="btn btn-floating waves-effect blue">
                            <i class="material-icons">search</i>
                        </button>
                        <a href="#" class="btn btn-floating red modal-close">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-collapse').sideNav();
            $('.modal').modal();
            $('select').material_select();
        });
    </script>
    <script>
        $('.dropdown-button').dropdown({
            inDuration: 300,
            belowOrigin: true,
            outDuration: 225,
            constrainWidth: false,
            hover: true,
            gutter: 0,
            alignment: 'left',
            stopPropagation: false
        });
    </script>
</body>
</html>