<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Espera</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/lista_espera.css">
</head>
<body>

    <div class="fundo">
        {{-- TABELA DE LISTA DE ESPERA --}}
        <div class="row">
            <h4 class="white-text">Lista de Utilizadores Em Espera: Abertura de Conta</h4>
            <table class="striped resposive-table centered">
                <thead class="blue">
                  <tr>
                      <th>ID</th>
                      <th>SENHA</th>
                      <th>SERVIÇO</th>
                      <th>TEMPO DE CHEGADA</th>
                      <th>TEMPO DE ESPERA</th>
                      <th>STATUS</th>
                  </tr>
                </thead>
        
                <tbody>
                  @for ($i = 1; $i <= 5; $i++)
                    <tr>
                        <td>1</td>
                        <td>04</td>
                        <td>Abertura de Conta</td>
                        <td>9h:30m:00s</td>
                        <td>10h:45m:30s</td>
                        <td>
                            <a href="#" title="Atualizar Status para a tabela de atendidos" class="btn btn-floating green waves-effect">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" title="Cancelar Atendimento" class="btn btn-floating red waves-effect">
                                <i class="material-icons">cancel</i>
                            </a>
                            <a href="#" title="Chamar Serviço por Senha" class="btn btn-floating blue waves-effect">
                                <i class="material-icons">notifications_active</i>
                            </a>
                        </td>
                    </tr>
                  @endfor
                </tbody>
              </table>
        </div>
    </div>
    


    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/materialize.min.js"></script>
</body>
</html>