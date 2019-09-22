<?php

/**
 * The Box Child
 * @version 0.2
 * @author Daniel Huidobro <daniel@rebootproject.mx>
 * Pagina home del sitio, mi resumen
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Daniel Huidobro daniel@rebootproject.mx">
    <title>@elhui2 - Sitio de Daniel Huidobro</title>
    <link href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/" style="text-transform:none">@elhui2</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Habilidades</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-white text-center" style="background: url(<?php echo get_stylesheet_directory_uri() . '/assets/cover.jpg' ?>) 100% 100px no-repeat fixed;background-size: cover;">
        <div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5 rounded-circle" src="<?php echo get_stylesheet_directory_uri() . '/assets/profile.jpg' ?>" alt="Daniel Huidobro">

            <h1 class="masthead-heading text-uppercase mb-0">Daniel Huidobro</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">Full Stack Developer - Aprendíz de Alpinista - Lector ocasional</p>

        </div>
    </header>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Habilidades e Intereses</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#linux-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> GNU/Linux
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_linux.png' ?>" alt="Icono Linux">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#php-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> PHP
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_php.png' ?>" alt="Icono PHP">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#java-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> Java
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_java.png' ?>" alt="">
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mysql-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> MySQL
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_mysql.png' ?>" alt="">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#android-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> Android
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_android.png' ?>" alt="">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#ios-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> iOS
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_apple.png' ?>" alt="">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#montain-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> Alpinismo
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_mountain.png' ?>" alt="">
                    </div>
                </div>

                <div class="ccol-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#book-modal">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i> Lectura
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/ic_book.png' ?>" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="page-section text-white mb-0" id="about">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de</h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Informático de vocación, hoy me juego la vida en nuestro proyecto <a href="https://rebootproject.mx">Reboot Project</a>. Hacemos y aprendemos un montón de cosas chidas con gente inteligente y buena onda.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Este es mi sitio personal, escribo y comparto un poco de todo, cosas de mi interés. Nada de lo que aquí aparece refleja la opinión de nuestra empresa o colaboradores. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacto</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>Para asuntos de trabajo o asuntos técnicos dejame un mensaje en <a href="mailto:daniel@rebootproject.mx">daniel@rebootproject.mx</a></p>
                    <p>Otros temas por cualquier Red Social.</p>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Grupo Nindo</h4>
                    <p class="lead mb-0">Entusiastas del montañismo y senderismo. Hacemos colecta anual de útiles escolares para la sierra Mazateca</p>
                    <p class="lead mb-0"><a href="https://www.facebook.com/Nindo12/">Visitar</a></p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">En la red</h4>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://www.facebook.com/elhui2.mx">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://twitter.com/elhui2">
                        <i class="fab fa-fw fa-twitter"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://www.linkedin.com/in/daniel-huidobro-65198147">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Imagink</h4>
                    <p class="lead mb-0">Playeras personalizadas de la mejor calidad, señalética y aplicación de vinil en superficies </p>
                    <p class="lead mb-0"><a href="http://imagink.com.mx">Visitar</a></p>
                </div>

            </div>
        </div>
    </footer>

    <section class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyleft &copy; @elhui2</small>
        </div>
    </section>

    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Linux Modal -->
    <div class="portfolio-modal modal fade" id="linux-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">GNU/Linux</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_linux.png' ?>" alt="">
                                <p class="mb-5">El mejor sistema operativo para servidores y uno de los proyectos colaborativos más grandes de la historia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP Modal -->
    <div class="portfolio-modal modal fade" id="php-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">PHP</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_php.jpg' ?>" alt="">
                                <p class="mb-5">Más de 10 año de experiencia y sigo aprendiendo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="java-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Java</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_java.png' ?>" alt="">
                                <p class="mb-5">Spring, Struts y Android SDK.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="mysql-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mysql</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_mysql.jpg' ?>" alt="">
                                <p class="mb-5">Administracion, configuración y creación en este motor de base de datos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="android-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Android</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_android.jpg' ?>" alt="">
                                <p class="mb-5">Desarrollo, actualizacion y mantenimiento de aplicaciones Android.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="ios-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">iOS</h2>

                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_apple.jpg' ?>" alt="">

                                <p class="mb-5">Desarrollo, actualizacion y mantenimiento de aplicaciones para iPhone & iPad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="montain-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Algun día...</h2>

                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_everest.jpg' ?>" alt="">

                                <p class="mb-5">Espero con toda mi esperanza.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Book -->
    <div class="portfolio-modal modal fade" id="book-modal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Una guía definitiva</h2>

                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/pf_book.jpg' ?>" alt="">

                                <p class="mb-5">En todos los aspectos de mi vida no es mentira, los consejos de l@s más sabios y l@s más fuertes \m/</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>
    <!-- <script src="js/jqBootstrapValidation.js"></script> -->
    <!-- <script src="js/contact_me.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/freelancer.js' ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36488649-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-36488649-6');
    </script>
</body>

</html>