<?php session_start(); require_once('inc/connexion.php') ?>

<?php

	$id_competence = $_GET['id_competence'];
	if($_POST){

		$percent_title = $_POST['percent_title'];
		$percent_circle = $_POST['percent_circle'];
		$competence = $_POST['competence'];

		$update = $bdd->query("UPDATE competences SET competence = '$competence', percent_title = '$percent_title', percent_circle = '$percent_circle' WHERE id_competence = '$id_competence'  ");
		header('location: competences.php');
	}

?>

<?php require_once('inc/haut.inc.php') ?>

	<?php
		$query = $bdd -> query("SELECT * FROM competences WHERE id_competence = '$id_competence' ");
		$ligne_c = $query -> fetch();
	?>

<h1>Modification des compétences</h1>

<form id="formulaire" method="post">
		<label>Compétence</label><br>
		<input class="competence" type="text" name="competence" value="<?= $ligne_c['competence'] ?>"><br>

		<label>Titre niveau</label><br>
		<input class="niveau" type="text" name="percent_title" placeholder="Pourcentage du niveau" value="<?= $ligne_c['percent_title'] ?>"><br>

		<label>Cercle niveau</label><br>
		<input class="niveau" type="text" name="percent_circle" placeholder="Faire 100 - le niveau de pourcentage" value="<?= $ligne_c['percent_circle'] ?>"><br>

		<input class="submit" type="submit" value="Mettre à jour">
</form>

<?php require_once('inc/bas.inc.php') ?>
