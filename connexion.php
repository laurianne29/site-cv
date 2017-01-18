<?php require_once('inc/connexion.php') ?>

<?php
session_start();

if(isset($_SESSION['Auth'])){

	header('location:index.php');
}
//On teste si quelque chose a été envoyé depuis un formulaire
if ($_POST) {
	// initilisation des variables
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	// requêtes sql qui permet de vérifier si les identifiant sont correcte
	
	$query = $bdd -> prepare("SELECT * FROM user,competences,experiences WHERE pseudo = :pseudo && mdp = :mdp");
	$query -> bindParam(':pseudo',$pseudo, PDO::PARAM_STR);
	$query -> bindParam(':mdp',$mdp, PDO::PARAM_STR);
	$query -> execute();
	// fin de la requête

	//ici nous allons tester si il trouve bien l'utilisateur qui a été taper
	$userIsOk = $query -> rowCount();

	// si il a été trouver alors ....
	if ($userIsOk) {
		//On enregistre ses données dans....
		$_SESSION['Auth'] = $query -> fetch(PDO::FETCH_ASSOC);

		//aprés l'avoir enregistré dans notre variable nous allons le rediriger
		header('location:index.php');
	}else{
		//sinon si les identifiant sont incorrecte on lui dit
		echo "<div class='error'>Identifiants incorrectes !</div>";
	}

}
?>:
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="framework/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>

<h1 id="title-co">Connexion</h1>
<form id="connexion" action="connexion.php" method="POST">
	<label>Pseudo</label><br>
	<input type="text" name="pseudo"><br><br>

	<label>Mot de passe</label><br>
	<input type="password" name="mdp"><br><br>

	<input name="connexion" type="submit" value="Connexion">
</form>
	
</body>
</html>


<?php require_once('inc/bas.inc.php') ?>