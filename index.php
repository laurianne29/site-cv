<?php
require_once('inc/connexion.php');

$sql = $bdd -> query("SELECT * FROM user");
$user = $sql -> fetch();




$sql = $bdd -> query("SELECT * FROM experiences");
$experiences = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM formation");
$formations = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM titre");
$titre = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM loisirs");
$loisirs = $sql -> fetchAll();

$sql = $bdd -> query("SELECT * FROM langues");
$langues = $sql -> fetchAll();

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

    <!-- PRELOADER-->
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

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
                        <a class="page-scroll" href="#profil">A propos de moi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#competences">Compétences</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projets">Projets</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#formations-exp">Expériences & Formations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#interets">Intérêts</a>
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
                    <a class="page-scroll" href="#profil"><i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </header>
    </div>

    <!-- SECTION PROFIL -->
    <section id="profil">
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
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quas suscipit nihil excepturi architecto eligendi cumque necessitatibus enim aperiam iusto. Vel, voluptatibus ipsam ullam. Itaque, magni? Vero omnis, veritatis nemo!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION COMPETENCES -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/montgolfiere.jpg">
        <section id="competences">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading text-center">Compétences</h2>
                        <h3 class="section-subheading text-muted text-center">En veille technique permanante, </h3>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql = $bdd -> query("SELECT * FROM competences");
                    while ($competences = $sql -> fetch()):
                    ?>
                        <div class="col-lg-3 text-center">
                            <div class="col-lg-12">
                                <h3 class="text-center"><?= $competences['competence']; ?></h3>
                            </div>
                            <div class="o-progress-circle o-progress-circle--rounded">
                                <div class="o-progress-circle__number">
                                    <span data-pourcent><?= $competences['percent_title'] ?></span>
                                </div>
                                <div class="o-progress-circle__fill">
                                    <svg class="icon" viewBox="0 0 40 40">
                                        <circle r="15.9154943092" cy="20" cx="20" />
                                        <circle r="15.9154943092" cy="20" cx="20" stroke-dashoffset="<?= $competences['percent_circle'] ?>" transform="rotate(-90,20,20)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    </div>

    <!--////////////////////////////////////////////////////////////////// PROJET \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <section id="projets">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Mes projets</h2>
                </div>
            </div>
            <div class="row">
                <article class="col-md-4 col-sm-6 portfolio-item">
                    <header>
                        <img src="front/img/portfolio/projet-site-cv.png" />
                        <h1>Site CV</h1>
                    </header>
                    <div class="content">
                        <p>Premier site CV entièrement responsive.</p>
                        <h2>Langages utilisés :</h2>
                        <ul class="tags">
                            <li class="html">HTML</li>
                            <li class="css">CSS</li>
                            <li class="js">JavaScript</li>
                        </ul>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 portfolio-item">
                    <header>
                        <img src="front/img/portfolio/e-boutique.png" />
                        <h1>E-boutique</h1>
                    </header>
                    <div class="content">
                        <p>Site E-boutique réalisé durant ma formation avec WF3.</p>
                        <h2>Langages utilisés :</h2>
                        <ul class="tags">
                            <li class="html">HTML</li>
                            <li class="css">CSS</li>
                            <li class="js">JavaScript</li>
                        </ul>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 portfolio-item">
                    <header>
                        <img src="front/img/portfolio/t-chat.png" />
                        <h1>T-chat</h1>
                    </header>
                    <div class="content">
                        <p>Chat réaliser avec le framework W</p>
                        <h2>Langages utilisés :</h2>
                        <ul class="tags">
                            <li class="php">PHP</li>
                            <li class="html">HTML</li>
                            <li class="css">Ajax</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!--/////////////////////////////////////////////////////////// SECTION EXPERIENCES / FORMATIONS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/montgolfiere.jpg">
        <section id="formations-exp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 text-center">
                        <h2 class="section-heading">Formations / Expériences professionnelles</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time class="text-uppercase"><?= $experiences[1]['dates'] ?></time>
                                        <h4 class="subheading"><?= $experiences[1]['experience']; ?></h4>
                                        <p class="text-muted"><?= $experiences[1]['taches'] ?></p>
                                        <span><?= $experiences[1]['lieu'] ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time class="text-uppercase"><?= $formations[1]['dates_formation'] ?></time>
                                        <h4 class="subheading"><?= $formations[1]['formation']; ?></h4>
                                        <p class="text-muted"><?= $formations[1]['description'] ?></p>
                                        <span><?= $formations[1]['lieu'] ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time class="text-uppercase"><?= $formations[0]['dates_formation'] ?></time>
                                        <h4 class="subheading"><?= $formations[0]['formation'] ?></h4>
                                        <p class="text-muted"><?= $formations[0]['description'] ?></p>
                                        <span><?= $formations[0]['lieu'] ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time class="text-uppercase"><?= $experiences[0]['dates'] ?></time>
                                        <h4 class="subheading"><?= $experiences[0]['experience']; ?></h4>
                                        <p class="text-muted"><?= $experiences[0]['taches']; ?></p>
                                        <span><?= $experiences[0]['lieu'] ?></span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////// SECTION INTERETS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    <section id="interets" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading text-center">Mes intérêts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-loisir text-center">
                        <div class="col-md-offset-1 col-md-2">
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
                            <img src="front/img/logos/travel.png" alt="logo voyage" width="70">
                            <p>Pérou, République-Tchèque, Ecosse, Angleterre, Italie... Voyager c'est se former sa propre bibliothèque.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="front/img/logos/telescope.png" alt="logo telescope" width="70">
                            <p>Observer l'infiniment grand et voyager entre les constellations à travers mon télescope...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="description text-center">
                        <h4>Langues</h4>
                        <p><?= $langues[0]['langue'] .' : '. $langues[0]['niveau'] ?></p>
                        <p><?= $langues[1]['langue'] .' : '. $langues[1]['niveau'] ?></p>
                        <p><?= $langues[2]['langue'] .' : '. $langues[2]['niveau'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--//////////////////////////////////////////////////////////////////// TELECHARGER MON CV \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    <aside class="cv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="button"><a href="front/img/cv_laurianne.pdf" target="_blank">MON CV PAPIER</a></div>
                </div>
            </div>
        </div>
    </aside>

    <!--////////////////////////////////////////////////////////////////// SECTION CONTACTEZ-MOI ///////////////////////////////////////////////////////////////////////// -->

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
                        <a href="connexion.php">Espace admin</a>
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
