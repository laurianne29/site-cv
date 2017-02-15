<?php session_start(); require_once('inc/connexion.php') ?>

<?php

	$id_user = $_GET['id_user'];
	if($_POST){

		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$age = $_POST['age'];
		$adresse = $_POST['adresse'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];

		$update = $bdd->query("UPDATE user SET prenom = '$prenom', nom = '$nom', age = '$age', adresse = '$adresse', tel = '$tel', email = '$email' WHERE id_user = '$id_user'  ");
		header('location: utilisateur.php');
	}

?>

<?php require_once('inc/haut.inc.php') ?>

	<?php
		$query = $bdd -> query("SELECT * FROM user WHERE id_user = '$id_user' ");
		$ligne_u = $query -> fetch();
	?>

<h1>Modification des compétences</h1>

<form id="formulaire" method="post">
	<label>Prénom</label><br>
	<input class="prenom" type="text" name="prenom" placeholder="Prenom" value="<?= $ligne_u['prenom'] ?>"><br>

	<label>Nom</label><br>
	<textarea class="nom" type="text" name="nom" placeholder="Nom de famille" value="<?= $ligne_u['nom'] ?>"></textarea><br>

	<label>Age</label><br>
	<input class="age" type="text" name="age" placeholder="Age" value="<?= $ligne_u['age'] ?>"><br>

	<label>Adresse</label><br>
	<input class="adresse" type="text" name="adresse" placeholder="Adresse" value="<?= $ligne_u['adresse'] ?>"><br>

	<label>Téléphone</label><br>
	<input class="tel" type="text" name="tel" placeholder="06 .. .. .. .." value="<?= $ligne_u['tel'] ?>"><br>

	<label>E-mail</label><br>
	<input class="mail" type="text" name="email" placeholder="lauriannemichelot@gmail.com" value="<?= $ligne_u['email'] ?>"><br>

	<input class="submit" type="submit" value="Mettre à jour">
</form>

<?php require_once('inc/bas.inc.php') ?>
