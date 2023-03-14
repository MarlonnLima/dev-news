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

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class = "cabecalho fundo-roxo">
            <a class ="texto-branco"href = "{{route('site.index')}}"><h2>Dev News</h2></a>
            <div class ="container-data-hora texto-branco gap20">
                <div>
                <span><?php
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
            <?php 
            if(isset($_SESSION['nome_user'])):
                echo "<span class = 'texto-branco'>Olá ". $_SESSION['nome_user'] ."</span>";
                echo "<a class = 'texto-branco' href = 'php_action/logout.php'>Sair</a>";
            else: 
            ?>
                <a class = 'texto-branco' href='{{route('site.login')}}'>Logue ou cadastre-se  <i class='fa-sharp fa-solid fa-user my-2'></i></a>
            <?php
            endif;
            ?></a>
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
                <form class = "form-pesquisa gap20" action = "search.php"method = "GET">
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
    </body>
    </html>