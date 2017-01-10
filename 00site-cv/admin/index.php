<?php require_once('../connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mon site CV</title>
</head>
<body>
	<header>
		
	</header>

	<div id="main-content">
		<h1>Espace administratif du site CV</h1>
		<?php 
			$pdo = $bdd -> query("SELECT * FROM user");
			$ligne = $pdo -> fetch();
				echo "<div class=''>Coucou " . $ligne['prenom']. " " . $ligne['nom'] . "<br><img src='img/' alt=''></div>";
		 ?>
	</div>

</body>
</html>