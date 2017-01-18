<?php session_start(); require_once('inc/connexion.php') ?>

<?php 

	$id_competence = $_GET['id_competence'];
	if($_POST){
		
		$niveau = $_POST['niveau'];
		$competence = $_POST['competence'];

		$update = $bdd->query("UPDATE competences SET competence = '$competence', niveau = '$niveau' WHERE id_competence = '$id_competence'  ");
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

		<label>Niveau</label><br>
		<input class="niveau" type="text" name="niveau" placeholder="Notion / Débutant / Intermédiaire / Confirmé" value="<?= $ligne_c['niveau'] ?>"><br>

		<input class="submit" type="submit" value="Mettre à jour">
</form>

<?php require_once('inc/bas.inc.php') ?>