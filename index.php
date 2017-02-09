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
                    <!-- <li>
                        <a class="page-scroll" href="#profil">A propos de moi</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#competences">Compétences</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#formations-exp">Expériences & Formations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#interets">Intérêts</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projets">Projets</a>
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
        <header>
            <div class="container">
                <div class="parallax-montgolfiere" data-parallax="scroll" data-image-src="front/img/montgolfiere.png">
                    <img src="front/img/montgolfiere.png" alt="montgolfiere">
                </div>
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
                    <a class="page-scroll" href="#competences"><i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </header>
    </div>

    <!-- SECTION COMPETENCES -->
    <section id="competences">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-center">Compétences numériques</h2>
                    <h3 class="section-subheading text-muted text-center">En veille technique permanante ! Actuellement, je renforce mes connaissance en Javascript et en Ajax.</h3>
                </div>
            </div>
            <div class="row">
                <?php
                $sql = $bdd -> query("SELECT * FROM competences");
                while ($competences = $sql -> fetch()):
                ?>
                    <div class="col-lg-3 text-center">
                        <div class="col-lg-12">
                            <img class="text-center" <?= 'src="front/img/skills/' . $competences['competence'] . '" title="'. $competences['titre-img'] .'" '; ?> ></img>
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

    <!--/////////////////////////////////////////////////////////// SECTION EXPERIENCES / FORMATIONS ///////////////////////////////////////////////////////////-->

    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/fond-montgolfiere.png">
        <section id="formations-exp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 text-center">
                        <h2 class="section-heading">Formations / Expériences professionnelles</h2>
                        <h3 class="section-subheading text-muted"></h3>
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

    <!--////////////////////////////////////////////////////////////////// PROJET //////////////////////////////////////////////////////////////////-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="front/img/fond-montgolfiere.png">
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
                            <p>Premier site CV entièrement responsive réalisé avec le framework Bootstrap.</p>
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
                                <li class="php">PHP</li>
                            </ul>
                        </div>
                    </article>
                    <article class="col-md-4 col-sm-6 portfolio-item">
                        <header>
                            <img src="front/img/portfolio/t-chat.png" />
                            <h1>T-chat</h1>
                        </header>
                        <div class="content">
                            <p>Chat réaliser avec le modèle MVC du framework W.</p>
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
    </div>

    <!--//////////////////////////////////////////////////////////////////// TELECHARGER MON CV ///////////////////////////////////////////////////////////////////  -->

    <aside class="cv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="button"><a href="front/img/cv_laurianne.pdf" target="_blank">MON CV PAPIER</a></div>
                </div>
            </div>
        </div>
    </aside>

    <!--////////////////////////////////////////////////////////////////// SECTION CONTACTEZ-MOI //////////////////////////////////////////////////////////////// -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactez-moi !</h2>
                    <h3 class="section-subheading text-muted">Un projet ? Mon profil vous intéresse ? N'hésitez pas à me contacter !</h3>
                </div>
            </div>
            <div id="ico-contact" class="row">
                <div class="col-lg-6">
                    <i class="fa fa-phone fa-2x" aria-hidden="true"> 06 99 90 37 85</i>
                </div>
                <div class="col-lg-6 text-right">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"> lauriannemichelot@gmail.com</i>
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

    <!--  Script principal-->
    <script src="front/js/main.js"></script>
    <script src="front/js/timeline.js"></script>

</body>
</html>
