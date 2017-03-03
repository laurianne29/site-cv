<?php session_start(); require_once('inc/connexion.php') ?>

<?php

	$id_experience = $_GET['id_experience'];
	if($_POST){

		$experience = $_POST['experience'];
		$taches = $_POST['taches'];
		$dates = $_POST['dates'];
		$lieu = $_POST['lieu'];

		$update = $bdd -> query("UPDATE experiences SET experience = '$experience', taches = '$taches', dates = '$dates', lieu = '$lieu' WHERE id_experience = $id_experience ");
		header('location: experiences.php');
	}

?>
<?php require_once('inc/haut.inc.php') ?>

<?php
	$query = $bdd -> query("SELECT * FROM experiences WHERE id_experience = '$id_experience' ");
	$ligne_e = $query -> fetch();
?>

<h1>Modification des expériences</h1>

<form id="formulaire" method="post">
	<label>Titre du poste</label><br>
	<input class="experiences" type="text" name="experience" value="<?= $ligne_e['experience']; ?>" ><br>

	<label>Activités et responsabilités</label><br>
	<textarea id="editor1" type="text" name="taches"><?= $ligne_e['taches']; ?></textarea><br>
	<script>
		CKEDITOR.replace('editor1');
	</script>

	<label>Dates début et fin</label><br>
	<input class="dates" type="text" name="dates" value="<?= $ligne_e['dates']; ?>"><br>

	<label>Lieu</label><br>
	<input class="lieu" type="text" name="lieu" value="<?= $ligne_e['lieu']; ?>"><br>

	<input class="submit" type="submit" name="modifier" value="Modifier">
</form>

<?php require_once('inc/bas.inc.php') ?>
