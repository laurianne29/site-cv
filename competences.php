<?php session_start(); require_once('inc/connexion.php'); ?>

<?php

	if (isset($_POST['competence'])) {
		if ($_POST['competence']!='' && $_POST['titre_img']!='' && $_POST['percent_title']!='' && $_POST['percent_circle']!='') {
			$competence = addslashes($_POST['competence']);
			$titre_image = addslashes($_POST['titre_img']);
			$percent_title = addslashes($_POST['percent_title']);
			$percent_circle = addslashes($_POST['percent_circle']);

		$bdd -> exec("INSERT INTO competences VALUES (NULL, '$competence','$titre_image','$percent_title', '$percent_circle')");
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

	<form id="formulaire"  method="post">
		<label>Compétence</label><br>
		<input class="competence" type="text" name="competence" placeholder="Insérez une image correspondant à la compétence"><br>

		<label>Titre image</label><br>
		<input class="competence" type="text" name="titre_img" placeholder="Title de l'image"><br>

		<label>Titre niveau</label><br>
		<input class="niveau" type="text" name="percent_title" placeholder="Pourcentage du niveau"><br>

		<label>Cercle niveau</label><br>
		<input class="niveau" type="text" name="percent_circle" placeholder="Faire 100 - le niveau de pourcentage"><br>

		<input class="submit" type="submit" value="Insérer une nouvelle compétence">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM competences ORDER BY id_competence DESC");
	?>

	<table id="competences" border="1">
		<thead>
			<th>Compétences</th>
			<th>Titre image</th>
			<th>Titre niveau</th>
			<th>Cercle niveau</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['competence']; ?></td>
			<td><?php echo $ligne['titre_img']; ?></td>
			<td><?php echo $ligne['percent_title']; ?></td>
			<td><?php echo $ligne['percent_circle']; ?></td>
			<td><a href="modifier_c.php?id_competence=<?php echo $ligne['id_competence']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
			<td><a href="competences.php?id_competence=<?php echo $ligne['id_competence']; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>
	</table>

<?php require_once('inc/bas.inc.php'); ?>
