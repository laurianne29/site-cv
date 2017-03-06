<?php require_once('inc/connexion.php') ?>

<?php
session_start();

if(isset($_SESSION['Auth'])){

	header('location:index02.php');
}
//On teste si quelque chose a été envoyé depuis un formulaire
if (isset($_POST['connexion'])) {
	// initilisation des variables
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	// requêtes sql qui permet de vérifier si les identifiant sont correcte

	$query = $bdd -> prepare("SELECT * FROM user WHERE pseudo = :pseudo && mdp = :mdp");
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
		header('location:index02.php');
	}else{
		//sinon si les identifiant sont incorrecte on lui dit
		echo "<div class='error'>Identifiants incorrectes !</div>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Connexion</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="framework/font-awesome-4.7.0/css/font-awesome.min.css">
	    <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>	
	<body>
	<span><a href="index.php">-> Site cv</a></span>
	
	<section class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 login-container">
				<div class="row text-center">
					<img src="img/login.png" alt="image_login" />
				</div>
	            <p id="profile-name" class="profile-name-card"></p>
			
	            <form class="form-signin" method="post" action="">
	                <input type="text" id="pseudo" class="form-control" placeholder="Pseudo" name="pseudo" required autofocus>
	                
	                <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" name="mdp" required>

	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="connexion">Connexion</button>
	            </form>
	            <a href="?action=recup_password" class="forgot-password">Mot de passe oublié ?</a>
			</div>
		</div>

		<?php 
		if(isset($_GET['action']) && $_GET['action'] == 'recup_password'):

			if(isset($_POST['recup_mdp'])){

				if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

					echo'<div class="alert alert-danger">Veuillez rentre une email valide</div>';

				}else{
					$recup_for_token = $bdd->query("SELECT * FROM user");
					$code = $recup_for_token->fetch(PDO::FETCH_ASSOC);

					$token = sha1($code['email'].$code['nom'].$code['prenom'].$code['mdp']);

					$token_POST = sha1($_POST['email'].$code['nom'].$code['prenom'].$code['mdp']);

					if($token_POST === $token){

						$to = 'laurianne.michelot@lepoles.com';
						$subject="recupération de mot de passe";
						$message = 'Votre pseudo : '.$code['pseudo'].' ';

						$message .= 'Votre mot de passe : '.$code['mdp'];
						$headers = 'MIME-Version: 1.0'.'\r\n';

						$headers .='Content-type: text/html; charset=iso-8859-1'.'\r\n';

						mail($to,$subject,$message,$headers);

						echo'<div class="alert alert-success col-md-6 col-md-offset-3">Un mail vient de vous être envoyé !</div>';
					}else{
						echo'<div class="alert alert-danger">Cette address n\'est pas valide</div>';
					}
				}
			}
		?>

		<div class="row">
			<form method="POST" class=" col-md-4 col-md-offset-4 login-container">
				<label>Saisissez votre email pour récupérer vos identifiants</label>
				<input type="email" name="email" class="form-control" placeholder="Adresse e-mail"><br>
				<button type="submit" name="recup_mdp" class="btn btn-lg btn-primary btn-block btn-signin">Récupération des identifiants</button>
			</form>
		</div>

	<?php endif;?>
	</body>
</html>


<?php require_once('inc/bas.inc.php') ?>
