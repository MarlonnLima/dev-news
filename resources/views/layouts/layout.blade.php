<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2495/2495007.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/15f4dde997.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>

    <div id ="hello-react">
    </div>
    <header>
        <div class = "cabecalho fundo-roxo">
            <a class ="texto-branco"href = "{{route('site.index')}}"><h2>Dev News</h2></a>
            <div class ="container-data-hora texto-branco gap20">
                <div>
                <span><?php
                date_default_timezone_set("America/Sao_Paulo");
                $semana = array(
                    'Sun' => 'Domingo ', 
                    'Mon' => 'Segunda-Feira ',
                    'Tue' => 'Terca-Feira ',
                    'Wed' => 'Quarta-Feira ',
                    'Thu' => 'Quinta-Feira ',
                    'Fri' => 'Sexta-Feira ',
                    'Sat' => 'Sábado '
                );
                 echo $semana[date('D')] . ""; 
                 echo date('d/m, Y');?></span>
                <span class ="detalhe-hora texto-roxo"><?php echo date('H:i:s');?></span>
                </div>
            </div>
            @if(Auth::check())
            <span class = 'texto-branco'>Olá {{auth()->user()->name}}</span>
            <a class = 'texto-branco' href = '{{route('login.logout')}}'>Sair</a>
            @else
                <a class = 'texto-branco' href='{{route('site.login')}}'>Logue ou cadastre-se  <i class='fa-sharp fa-solid fa-user my-2'></i></a>
            @endif
           
        </div>
        
    </header>
    <div class ="banner gap20">
        <div class ="descricao-banner gap20 texto-branco">
            <h1>Seu portal de noticias dev</h1>
            <h2>Fique por dentro das novidades</h2>
            <h3>de uma maneira moderna</h3>
        </div>
        </div>
        <nav class ="nav-bar fundo-roxo">
        <ul>
            <li class ="flex">
                <form class = "form-pesquisa gap20" action = "{{route('noticia.procurar')}}"method = "POST">
                    @csrf
                    <input type="text" class ="texto-branco" name="busca" id="busca" placeholder="  Busque por categoria ou título" required>
                    <button type = "submit" class = "btn-pesquisar fundo-roxo texto-branco" name = "buscar-no-banco"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </li>
        </ul>
        </nav>
    @yield('conteudo')


    <footer class ="rodape texto-branco fundo-roxo">
        <p class ="texto-centralizado">Todos os direitos reservados a Marlon Lima</p>
    </footer>
    <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/15f4dde997.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
    </script>
    </body>
    </html>