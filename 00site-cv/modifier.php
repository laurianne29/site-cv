<?php require_once('inc/connexion.php') ?>

<?php 

if ($_POST) {
		$experiences = addslashes($_POST['experience']);
		$taches = addslashes($_POST['taches']);
		$lieu = addslashes($_POST['lieu']);
		$dates = addslashes($_POST['dates']);
	
		$bdd -> exec("UPDATE experiences VALUES(NULL, '$experiences', '$taches', '$lieu', '$dates','') WHERE id_experience ");
				header("location: experiences.php");
				exit();
}


 ?>

<?php require_once('inc/haut.inc.php') ?>

<h1>Modification des expériences</h1>

<form id="formulaire" action="experiences.php" method="post">
	<label>Titre du poste</label><br>
	<input class="experiences" type="text" name="experience" ><br>

	<label>Activités et responsabilités</label><br>
	<input class="taches" type="text" name="taches" ><br>

	<label>Dates début et fin</label><br>
	<input class="dates" type="text" name="dates" ><br>

	<label>Lieu</label><br>
	<input class="lieu" type="text" name="lieu" ><br>

	<input class="submit" type="submit" name="modifier" value="Modifier">
</form>

<?php require_once('inc/bas.inc.php') ?>