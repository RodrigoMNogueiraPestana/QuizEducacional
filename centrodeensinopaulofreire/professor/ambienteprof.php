<?php
    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['materia']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['materia']);
        header('Location: loginprofessor.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE Paulo Freire</title>
    <link rel="icon" type="image/x-icon" href="assets/imgfavicon/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="img/imgfavicon/favicon.ico" type="image/x-icon">
        
        <link rel="stylesheet" href="professor.css">
</head>
<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href=""><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#principal">Menu de Navegação</a></li>
            <li class="sidebar-nav-item"><a href="#principal">Ínicio</a></li>
            <li class="sidebar-nav-item"><a href="#about">Sobre</a></li>
            <li class="sidebar-nav-item"><a href="#services">Objetivos</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contato</a></li>
            <li class="sidebar-nav-item"><a href="sairprofessor.php">Sair</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center" id="principal">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">CE Paulo Freire</h1>
            <?php
                echo "<h2><u>$logado</u></h2>"
            ?>
            <h3 class="mb-5"><em>Projeto estudantil !</em></h3>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>O educador se eterniza em cada ser que educa.</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="content-section bg-warning text-dark text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mb-5">Objetivos</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone "></i></span>
                    <h4><strong>Plataformas</strong></h4>
                    <p class="text-dark mb-0" >Você pode utilizar em outras telas.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                    <h4><strong>Falta um texto</strong></h4>
                    <p class="text-dark mb-0">Falta um texto também.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                    <h4><strong>Modo de Uso</strong></h4>
                    <p class="text-dark mb-0">
                        Pode utilizar sozinho ou em conjunto com o professor(a) em sala de aula.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                    <h4><strong>Questões</strong></h4>
                    <p class="text-dark mb-0">São questões do Enem do período de x a z.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Matéria</h3>
                <h2 class="mb-5">...</h2>
            </div>
            <div class="row gx-0">

                <div class="col-lg-6">
                    <a class="portfolio-item" href="#">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">...</div>
                                <p class="mb-0">Aqui vai um texto.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="#" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Talvez um mapa da Escola-->
    <!--<div class="map" id="contact">
        <iframe src="https://www.google.com.br/maps/place/CE+Paulo+Freire/@-2.5020614,-44.2260607,17z/data=!3m1!4b1!4m6!3m5!1s0x7f6923b448c67d3:0x1d11cae6e95c8cdf!8m2!3d-2.5020668!4d-44.2234858!16s%2Fg%2F11f541wyw7"></iframe>
        <br />
        <small><a href="https://www.google.com.br/maps/place/CE+Paulo+Freire/@-2.5020614,-44.2260607,17z/data=!3m1!4b1!4m6!3m5!1s0x7f6923b448c67d3:0x1d11cae6e95c8cdf!8m2!3d-2.5020668!4d-44.2234858!16s%2Fg%2F11f541wyw7"></a></small>
    </div>-->
    <!--Footer-->
    <footer class="footer text-center" id="contact">
        <div class="container px-4 px-lg-5">
            <p href="#contact" class="text-muted small mb-0">CE Paulo Freire &copy; Site Escolar 2023</p>   
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</html>
