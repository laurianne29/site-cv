<?php require_once('inc/connexion.php'); ?>

<?php require_once('inc/haut.inc.php'); ?>

		<h1>Espace administratif du site CV</h1>
		<div class="accroche">
			<i class="fa fa-quote-left fa-2" aria-hidden="true"></i>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, accusamus!</span>
			<i class="fa fa-quote-right fa-2" aria-hidden="true"></i>
		</div>
		<?php 
			$pdo = $bdd -> query("SELECT * FROM user");
			$ligne = $pdo -> fetch();
				echo 
				"<div id='info'><h2>" . 
					$ligne['prenom'] . " " . 
					$ligne['nom'] . 
					"</h2><br><img class='avatar' src='img/" . $ligne['avatar'] . "' alt='avatar' width='70'>" .
					"<h3>Coordonnées : </h3>" . 
					$ligne['adresse'] . "<br>" . 
					$ligne['code_postal'] . " " . 
					$ligne['ville'] . "<br>" .
					$ligne['tel'] . "<br>" .
					$ligne['age'] . " ans" .
				"</div>";
		 ?>