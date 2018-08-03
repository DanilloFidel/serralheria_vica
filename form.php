<?php require_once("destino.php"); ?>
<?php if(isset($_POST["enviar"])){
    if (enviarMensagem($_POST)){
        $mensagem = "Mensagem enviada com sucesso!";
    }else{
        $mensagem = "Falha ao enviar!";
    }  
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estruturas Vica | Portifólio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="_css/style.css" />
    <link rel="stylesheet" type="text/css" href="_css/portifolio.css" />
    <link rel="stylesheet" href="_css/bootstrap.css" />
    <link rel="stylesheet" href="_css/style_form.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="theme-color" content="#104088">
    <meta name="apple-mobile-web-app-status-bar-style" content="#104088">
    <meta name="msapplication-navbutton-color" content="#104088">
    <!--Jquery-->
    <script src="_javascript/jquery-3.3.1.min.js"></script>
    <script src="_javascript/script-site.js"></script>

    <!--Responsivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="background-image: url(_imagens/back_testes.jpg)">
   
  
    <!-- CABEÇALHO -->

    <nav id="header-vica" class="navbar navbar-expand-lg navbar-dark">
        <img id="logo-vica" class="img-fluid" src="_imagens/logo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul id="menu-1" class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfólio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="a_empresa.html">Empresa</a>
                </li>
            </ul>


        </div>
    </nav>

    <!--formulario-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">

            </div>

            <div id="cx-form" class="col-12 col-lg-6">
                <form method="post" action="form.php">
                    <h1 align="center">Fale conosco</h1>
                    <div class="form-group">
                        <label style="margin-top: 2%" for="nome">Nome Completo&nbsp;&nbsp;<small>(campo obrigatório)</small></label>
                        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" size="30" maxlength="30" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email&nbsp;&nbsp;<small>(campo obrigatório)</small></label>
                        <input class="form-control" type="text" id="email" name="email" placeholder="Email" size="30" maxlength="45" />
                    </div>
                    <div id="resposta"></div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" type="tel" id="telefone" name="telefone" placeholder="34999999999" size="30" maxlength="15" />
                    </div>
                    <div class="form-group">
                        <label for="comentario">Mensagem</label><br>
                        <textarea class="form-crontrol" id="comentario" name="mensagem" rows="4" cols="40" maxlength="250"></textarea>
                    </div>
                    <input id="btn-enviar-form" class="btn bnt-success" type="submit" value="Enviar" name="enviar">
                    <?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>
                </form>
                <div id="display"></div>                         
            </div>

            <div class="col-lg-3">

            </div>
        </div>
    </div>

    <script src="_javascript/bootstrap.min.js"></script>
    <script src="_javascript/jquery.js"></script>
    <script src="_javascript/popper.min.js"></script>

</body>

</html>