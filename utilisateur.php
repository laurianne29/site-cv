<?php session_start(); require_once('inc/connexion.php'); ?>

<?php

	if (isset($_POST['prenom'])) {
		if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['age']) && !empty($_POST['adresse'])) && !empty($_POST['tel'])) && !empty($_POST['email'])){
			$prenom = addslashes($_POST['prenom']);
			$nom = addslashes($_POST['nom']);
			$age = addslashes($_POST['age']);
			$adresse = addslashes($_POST['adresse']);
			$tel = addslashes($_POST['tel']);
			$email = addslashes($_POST['email']);

		$bdd -> exec("INSERT INTO user VALUES (NULL, '$prenom', '$nom', '$age', '$adresse', '$tel', '$email','')");
		header("location: utilisateur.php");
		exit();
		}
	}

	// Suppression d'une experience
	if (isset($_GET['id_user'])) {
		$delete = $_GET['id_user'];
		$sql = "DELETE FROM user WHERE id_user = '$delete' ";
		$bdd -> query($sql);
	}

?>

<?php require_once('inc/haut.inc.php'); ?>

<h1>Utilisateur</h1>

	<form id="formulaire" action="experiences.php" method="post">
		<label>Prénom</label><br>
		<input class="prenom" type="text" name="prenom" placeholder="Prenom"><br>

		<label>Nom</label><br>
		<textarea class="nom" type="text" name="nom" placeholder="Nom de famille"></textarea><br>

		<label>Age</label><br>
		<input class="age" type="text" name="age" placeholder="Age"><br>

		<label>Adresse</label><br>
		<input class="adresse" type="text" name="adresse" placeholder="Adresse"><br>

		<label>Téléphone</label><br>
		<input class="tel" type="text" name="tel" placeholder="06 .. .. .. .."><br>

		<label>E-mail</label><br>
		<input class="mail" type="text" name="email" placeholder="lauriannemichelot@gmail.com"><br>

		<input class="submit" type="submit" value="Insérer un nouveau champ">
	</form>

	<?php
		$query = $bdd -> query("SELECT * FROM user");
	?>

	<table id="user" border="1">
		<thead>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Age</th>
			<th>Adresse</th>
			<th>Téléphone</th>
			<th>Mail</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['prenom']; ?></td>
			<td><?php echo $ligne['nom']; ?></td>
			<td><?php echo $ligne['age']; ?></td>
			<td><?php echo $ligne['adresse']; ?></td>
			<td><?php echo $ligne['tel']; ?></td>
			<td><?php echo $ligne['email']; ?></td>
			<td><a href="modifier_e.php?id_experience=<?php echo $ligne['id_experience']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
			<td><a href="experiences.php?id_experience=<?php echo $ligne['id_experience']; ?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>
	</table>



<?php require_once('inc/bas.inc.php'); ?>
