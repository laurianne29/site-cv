<?php 
require_once('inc/connexion.php'); 

$sql = $bdd -> query("SELECT * FROM user");
$user = $sql -> fetch();

$sql = $bdd -> query("SELECT * FROM competences");
$competences = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM experiences");
$experiences = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM formation");
$formations = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM titre");
$titre = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM loisirs");
$loisirs = $sql -> fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> </title>
    
    <!-- Bootstrap Core CSS -->
    <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="front/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="front/css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="front/css/style-front.css" rel="stylesheet">
</head>

<body id="page-top" class="index">

    <!-- LOADER AVANT DE CHARGER LA PAGE -->

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll text-uppercase" href="#page-top">laurianne.m</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="header-nav" class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Mon profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Compétences</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Expériences & Formations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- HEADER -->
    <!-- UTILISATEUR -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/fond-montgolfiere.png">
    <!-- <div class="parallax-montgolfiere" data-parallax="scroll" data-image-src="front/img/montgolfiere.png">
        
    </div> -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">
                        <?php echo $user['prenom'] . ' ' . $user['nom']; ?>
                    </div>
                    <div class="intro-lead-in">
                        <?= $titre[0]['titre_cv']?>
                    </div>
                    <div class="icones" class="intro-lead-in">
                        <a href="https://github.com/laurianne29" target="_blank"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/CryptiX29?lang=fr" target="_blank"><i class="fa fa-twitter fa-4x" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/laurianne-michelot-04a174b2?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin fa-4x" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/killa_luna/" target="_blank"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a>
                    </div>
                    <a class="page-scroll" href="#services"><i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </header>
    </div>

    <!-- SECTION PROFIL -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">À propos de moi</h2>
                    <h3 class="section-subheading text-muted"><?= $titre[0]['accroche'] ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img class="img-circle img-responsive img-profil" src="front/img/autumn.jpg">
                </div>
            </div>
            <div class="row" id="text-profil">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="timeline-heading text-left">
                        <h4>Age</h4>
                        <p> <?= $user['age'] . ' ans'; ?></p>
                        <h4>Email</h4>
                        <p> <?= $user['email']; ?></p>
                        <h4>Téléphone</h4>
                        <p> <?= $user['tel']; ?></p>
                    </div>
                </div>
                <div class="col-lg-offset-3 col-lg-5 col-md-offset-3 col-md-5 col-sm-offset-3 col-sm-5 col-xs-12">
                    <div class="description text-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda inventore impedit delectus, incidunt sapiente doloremque quam aliquid nobis debitis. Porro laborum architecto asperiores, iste accusamus at, doloremque quas recusandae.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center titre-interet">Mes intérêts</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-loisir text-center">
                        <div class="col-md-2">
                            <img src="front/img/logos/html.png" alt="logo code" width="70">
                            <p>Coder et me mettre à jour sur les nouvelles technologies et nouveaux langages web.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="front/img/logos/music.png" alt="logo guitare" width="70">
                            <p>Guitare, piano, batterie... Je ne peux pas vivre sans musique !</p>
                        </div>
                        <div class="col-md-2">
                            <img src="front/img/logos/cat.png" alt="logo chat" width="70">
                            <p>Mon chat, toujours à mes côtés quand je travaille !</p>
                        </div>
                        <div class="col-md-2">
                            <img src="front/img/logos/travel-1.png" alt="logo voyage" width="70">
                            <p>Pérou, République-Tchèque, Ecosse, Angleterre, Italie... Voyager c'est se former sa propre bibliothèque.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="front/img/logos/telescope.png" alt="logo telescope" width="70">
                            <p>Observer l'infiniment grand et voyager entre les constellations à travers la lunette de mon télescope...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION COMPETENCES -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/montgolfiere.jpg">
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading text-center">Compétences</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">HTML</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>75</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="25" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">CSS</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>68</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="32" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">Bootstrap</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>80</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="20" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">Javascript</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>10</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="90" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">PHP</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>48</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="52" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">Wordpress</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>50</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="50" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">Photoshop</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>30</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="60" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12">
                            <h3 class="text-center">Ubuntu</h3>
                        </div>
                        <div class="o-progress-circle o-progress-circle--rounded">
                            <div class="o-progress-circle__number">
                                <span data-pourcent>35</span><em>%</em>
                            </div>
                            <div class="o-progress-circle__fill">
                                <svg class="icon" viewBox="0 0 40 40">
                                    <circle r="15.9154943092" cy="20" cx="20" />
                                    <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="65" transform="rotate(-90,20,20)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- SECTION EXPERIENCES / FORMATIONS-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Formations / Expériences</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="timeline">
                        <ul>
                            <li>
                                <div>
                                    <time class="text-uppercase"><?= $experiences[0]['dates'] ?></time>
                                    <h4 class="subheading"><?= $experiences[0]['experience']; ?></h4>
                                    <p class="text-muted"><?= $experiences[0]['taches'] ?></p>
                                    <span>Ville</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase"><?= $formations[0]['dates_formation'] ?></time>
                                    <h4 class="subheading"><?= $formations[0]['formation']; ?></h4>
                                    <p class="text-muted"><?= $formations[0]['description'] ?></p>
                                    <span>Ville</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase"><?= $formations[1]['dates_formation'] ?></time>
                                    <h4 class="subheading"><?= $formations[1]['formation'] ?></h4>
                                    <p class="text-muted"><?= $formations[1]['description'] ?></p>
                                    <span>Ville</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase"><?= $experiences[1]['dates'] ?></time>
                                    <h4 class="subheading"><?= $experiences[1]['experience']; ?></h4>
                                    <p class="text-muted"><?= $experiences[1]['taches']; ?></p>
                                    <span>Ville</span>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/montgolfiere.jpg">
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/roundicons.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Round Icons</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/startup-framework.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Startup Framework</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/treehouse.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Treehouse</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/golden.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Golden</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/escape.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Escape</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="front/img/portfolio/dreams.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Dreams</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Clients Aside -->
        <aside class="dl-cv">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="button"><a href="front/img/cv_laurianne.pdf" target="_blank">MON CV PAPIER</a></div>
                    </div>
                </div>
            </div>
        </aside>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactez-moi !</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre nom et prénom *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Votre numéro de téléphone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre message *" id="message" required data-validation-required-message="S'il-vous-plaît entrez un message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div id="success"></div>
                                <div class="button"><a href="#">Envoyer !</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Laurianne Michelot</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-github"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/front/img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/front/img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/front/img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="front/front/img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="front/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="front/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="front/js/jqBootstrapValidation.js"></script>
    <script src="front/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="front/js/agency.min.js"></script>
    <script src="http://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js"></script>

    <!-- Theme parallax -->
    <script src="front/js/parallax.js-1.4.2/parallax.js"></script>
    <script src="front/js/parallax.js-1.4.2/parallax1.js"></script>

    <script src="front/js/main.js"></script>
    <script src="front/js/timeline.js"></script>

</body>

</html>
