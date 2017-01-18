<?php session_start(); require_once('inc/connexion.php') ?>

<?php 

	$id_formation = $_GET['id_formation'];
	if($_POST){
		
		$formation = $_POST['formation'];
		$description = $_POST['description'];
		$dates_formation = $_POST['dates_formation'];

		$update = $bdd->query("UPDATE formation SET formation = '$formation', description = '$description', dates_formation = '$dates_formation' WHERE id_formation = '$id_formation'  ");
		header('location: formations.php');
	}

?>

<?php require_once('inc/haut.inc.php') ?>

	<?php 
		$query = $bdd -> query("SELECT * FROM formation WHERE id_formation = '$id_formation' ");
		$ligne_c = $query -> fetch();
	?>

<h1>Modification des compétences</h1>

<form id="formulaire" method="post">
		<label>Formation</label><br>
		<input class="formation" type="text" name="formation" placeholder="Insérer une formation..." value="<?= $ligne_c['formation'] ?>"><br>

		<label>Description</label><br>
		<input class="description" type="text" name="description" value="<?= $ligne_c['description'] ?>"><br>

		<label>Date de la formation</label><br>
		<input class="dates_formation" type="text" name="dates_formation" value="<?= $ligne_c['dates_formation'] ?>"><br>

		<input class="submit" type="submit" value="Mettre à jour">
</form>

<?php require_once('inc/bas.inc.php') ?>