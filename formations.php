<?php session_start(); require_once('inc/connexion.php'); ?>

<?php

	if (isset($_POST['formation'])) {
		if ($_POST['formation']!='' && $_POST['formation']!='') {
			$formation = addslashes($_POST['formation']);
			$description = addslashes($_POST['description']);
			$date_formation = addslashes($_POST['dates_formation']);
			$lieu = addslashes($_POST['lieu']);

		$bdd -> exec("INSERT INTO formation VALUES (NULL, '$formation', '$description', '$date_formation', '$lieu')");
		header("location: formations.php");
		exit();
		}
	}

	// Suppression d'une compétence
	if (isset($_GET['id_formation'])) {
		$delete = $_GET['id_formation'];
		$sql = "DELETE FROM formation WHERE id_formation = '$delete' ";
		$bdd -> query($sql);
	}
?>

<?php require_once('inc/haut.inc.php'); ?>

<h1>Les formations</h1>

	<form id="formulaire" action="formations.php" method="post">
		<label>Formation</label><br>
		<input class="formation" type="text" name="formation" placeholder="Insérer une formation..."><br>

		<label>Description</label><br>
		<input class="description" type="text" name="description" placeholder="Description de la formation"><br>

		<label>Date de la formation</label><br>
		<input class="dates_formation" type="text" name="dates_formation" placeholder="jj/mm/aaaa"><br>

		<label>Lieux</label><br>
		<input class="formation" type="text" name="lieu" placeholder="Ville"><br>

		<input class="submit" type="submit" value="Insérer une nouvelle formation">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM formation");
	?>

	<table id="formations" border="1">
		<thead>
			<th>Formation</th>
			<th>Description</th>
			<th>Date de la formation</th>
			<th>Lieu</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['formation']; ?></td>
			<td><?php echo $ligne['description']; ?></td>
			<td><?php echo $ligne['dates_formation']; ?></td>
			<td><?php echo $ligne['lieu']; ?></td>
			<td><a href="modifier_f.php?id_formation=<?php echo $ligne['id_formation']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
			<td><a href="formations.php?id_formation=<?php echo $ligne['id_formation']; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>
	</table>

<?php require_once('inc/bas.inc.php'); ?>
