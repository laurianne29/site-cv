<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mon site CV</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- BOOTSTRAP CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="framework/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="../js/main.js"></script>
</head>
<body>
	<header>
		<h1>Espace administratif du site CV</h1>
		<span id="site-cv"><a href="index.php">Aperçu sur le site CV</a></span>
	</header>
	<nav>
		<ul>
			<li><a href="index02.php" id="<?=menuIsActive('index');?>">Mon profil</a></li>
			<li><a href="utilisateur.php" id="<?=menuIsActive('user');?>">Utilisateur</a></li>
			<li><a href="competences.php" id="<?=menuIsActive('competences');?>">Compétences</a></li>
			<li><a href="experiences.php" id="<?=menuIsActive('experiences');?>">Expériences</a></li>
			<li><a href="formations.php" id="<?=menuIsActive('formations');?>">Formations</a></li>
			<?php if(isset($_SESSION['Auth'])):?>
			<li><a href="deconnexion.php" id="<?=menuIsActive('deconnexion');?>">Deconnexion</a></li>
			<?php else:?>
			<li><a href="connexion.php" id="<?=menuIsActive('connexion');?>">Connexion</a></li>
			<li><a href="inscription.php" id="<?=menuIsActive('inscription');?>">Inscription</a></li>
		</ul>
	<?php endif;?>
	</nav>

	<section id="main-content">
