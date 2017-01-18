<?php session_start(); require_once('inc/connexion.php'); ?>

<?php

	if (isset($_POST['competence'])) {
		if ($_POST['competence']!='' && $_POST['niveau']!='') {
			$competence = addslashes($_POST['competence']);
			$niveau = addslashes($_POST['niveau']);

		$bdd -> exec("INSERT INTO competences VALUES (NULL, '$competence', '$niveau')");
		header("location: competences.php");
		exit();
		}
	}

	// Suppression d'une compétence
	if (isset($_GET['id_competence'])) {
		$delete = $_GET['id_competence'];
		$sql = "DELETE FROM competences WHERE id_competence = '$delete' ";
		$bdd -> query($sql);
	}

?>

<?php require_once('inc/haut.inc.php'); ?>

<h1>Les compétences</h1>

	<form id="formulaire" action="competences.php" method="post">
		<label>Compétence</label><br>
		<input class="competence" type="text" name="competence" placeholder="Insérer une compétence..."><br>

		<label>Niveau</label><br>
		<input class="niveau" type="text" name="niveau" placeholder="Notion / Débutant / Intermédiaire / Confirmé"><br>

		<input class="submit" type="submit" value="Insérer une nouvelle compétence">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM competences");
	?>

	<table id="competences" border="1">
		<thead>
			<th>Compétences</th>
			<th>Niveau</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['competence']; ?></td>
			<td><?php echo $ligne['niveau']; ?></td>
			<td><a href="modifier_c.php?id_competence=<?php echo $ligne['id_competence']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
			<td><a href="competences.php?id_competence=<?php echo $ligne['id_competence']; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>
	</table>

<?php require_once('inc/bas.inc.php'); ?>
