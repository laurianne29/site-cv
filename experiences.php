<?php session_start(); require_once('inc/connexion.php'); ?>

<?php
	
	if (isset($_POST['experience'])) {
		if (!empty($_POST['experience']) && !empty($_POST['taches']) && !empty($_POST['dates']) && !empty($_POST['lieu'])) {
			$experiences = addslashes($_POST['experience']);
			$taches = addslashes($_POST['taches']);
			$dates = addslashes($_POST['dates']);
			$lieu = addslashes($_POST['lieu']);

		$bdd -> exec("INSERT INTO experiences VALUES (NULL, '$experiences', '$taches', '$lieu', '$dates','')");
		header("location: experiences.php");
		exit();
		}
	}

	// Suppression d'une experience
	if (isset($_GET['id_experience'])) {
		$delete = $_GET['id_experience'];
		$sql = "DELETE FROM experiences WHERE id_experience = '$delete' ";
		$bdd -> query($sql);
	}

?>

<?php require_once('inc/haut.inc.php'); ?>

<h1>Les expériences</h1>

	<form id="formulaire" action="experiences.php" method="post">
		<label>Titre du poste</label><br>
		<input class="experiences" type="text" name="experience" placeholder="Développeur / Intégrateur web"><br>

		<label>Activités et responsabilités</label><br>
		<textarea class="taches" type="text" name="taches" placeholder="Activités exercées / tâches effectués..."></textarea><br>

		<label>Dates début et fin</label><br>
		<input class="dates" type="text" name="dates" placeholder="xx/xx/xxxx"><br>

		<label>Lieu</label><br>
		<input class="lieu" type="text" name="lieu" placeholder="Asnières"><br>

		<input class="submit" type="submit" value="Insérer une nouvelle experience">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM experiences");
	?>

	<table id="experiences" border="1">
		<thead>
			<th>Experience</th>
			<th>Activité / Responsabilité</th>
			<th>Lieu</th>
			<th>Dates</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['experience']; ?></td>
			<td><?php echo $ligne['taches']; ?></td>
			<td><?php echo $ligne['lieu']; ?></td>
			<td><?php echo $ligne['dates']; ?></td>
			<td><a href="modifier_e.php?id_experience=<?php echo $ligne['id_experience']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
			<td><a href="experiences.php?id_experience=<?php echo $ligne['id_experience']; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>
	</table>



<?php require_once('inc/bas.inc.php'); ?>