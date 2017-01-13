<?php require_once('inc/connexion.php') ?>

<?php 

if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
	
}

?>

<?php require_once('inc/haut.inc.php') ?>

<h1>Connexion</h1>
<form method="POST">
	<label>Pseudo</label><br>
	<input type="text" name="pseudo"><br><br>

	<label>Mot de passe</label><br>
	<input type="password" name="mdp"><br><br>

	<input type="submit" value="Connexion">
</form>

<?php require_once('inc/bas.inc.php') ?>