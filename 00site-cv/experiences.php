<?php require_once('inc/connexion.php'); ?>

<?php
	
	// if (isset($_POST['competence'])) {
	// 	if ($_POST['competence']!='' && $_POST['niveau']!='') {
	// 		$competence = addslashes($_POST['competence']);
	// 		$niveau = addslashes($_POST['niveau']);

	// 	$bdd -> exec("INSERT INTO competences VALUES (NULL, '$competence', '$niveau')");
	// 	header("location: competences.php");
	// 	exit();
	// 	}
	// }

?>

<?php require_once('inc/haut.inc.php'); ?>

<h1>Les expériences</h1>

	<form id="formulaire" action="experiences.php" method="post">
		<label>Titre du poste</label><br>
		<input class="experiences" type="text" name="experience"><br>

		<label>Activités et responsabilités</label><br>
		<textarea name="description" cols="25" rows="4"></textarea><br>

		<label>Dates début et fin</label><br>
		<input class="dates" type="text" name="dates"><br>

		<input class="submit" type="submit" value="Insérer une nouvelle experience">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM experiences");
	?>

	<table id="competences" border="1">
		<thead>
			<th>Experience</th>
			<th>Description</th>
			<th>Dates</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['experience']; ?></td>
			<td><?php echo $ligne['description']; ?></td>
			<td><?php echo $ligne['dates']; ?></td>
			<td><a href="">supprimer</a></td>
		</tr>
		<?php } ?>
	</table>



<?php require_once('inc/bas.inc.php'); ?>