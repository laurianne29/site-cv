<?php session_start(); require_once('inc/connexion.php'); ?>

	
<?php require_once('inc/haut.inc.php'); ?>

<h1 id="title">Laurianne Michelot</h1>
<h2>Développeuse / Intégratrice Web</h2>

<div class="accroche">
	<i class="fa fa-quote-left fa-2" aria-hidden="true"></i>
	<span>L'imagination, c'est ce qui nous rend capable de comprendre des choses que nous n'avons jamais vécu.</span>
	<i class="fa fa-quote-right fa-2" aria-hidden="true"></i>
</div>
<?php ?>
<!--------------------------- BULLE PROFIL -->
	<?php 
	$pdo = $bdd -> query("SELECT * FROM user");
	$ligne = $pdo -> fetch();
	echo "<div id='info'>";
		echo"<img class='avatar' src='img/" . $ligne['avatar'] . "' alt='avatar' width='160'>" . "<br><br>";
		// "<h3>Coordonnées : </h3>" . 

		echo isset($_SESSION['Auth']['prenom']) ? $_SESSION['Auth']['prenom'].' ' : $ligne['prenom'].' ';
		echo isset($_SESSION['Auth']['nom']) ? $_SESSION['Auth']['nom'].'<br>' : $ligne['nom'].'<br>';
		echo isset($_SESSION['Auth']['age']) ? $_SESSION['Auth']['age'].' ans <br>' : $ligne['age'].' ans <br>';
		echo isset($_SESSION['Auth']['tel']) ? $_SESSION['Auth']['tel'].'<br>' : $ligne['tel'].'<br>';
		echo isset($_SESSION['Auth']['adresse']) ? $_SESSION['Auth']['adresse'].'<br>' : $ligne['adresse'].'<br>';
		  
	echo "</div>";
	echo "<div class='clear'></div>";

	?>

<div id="section">

<!---------------------------- COMPETENCES -->
	<h2>Compétences</h2>

	<?php
	$query = $bdd -> query("SELECT * FROM competences");
	?>

	<table id="competences-index" border="1">
		<thead>
			<th>Compétences</th>
			<th>Niveau</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['competence']; ?></td>
			<td><?php echo $ligne['niveau']; ?></td>
		</tr>
		<?php } ?>
	</table>

<!---------------------------- EXPERIENCES -->
	<h2>Expériences</h2>
	<?php
		$query = $bdd -> query("SELECT * FROM experiences");
	?>

	<table id="experiences-index" border="1">
		<thead>
			<th>Experience</th>
			<th>Activité / Responsabilité</th>
			<th>Lieu</th>
			<th>Dates</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['experience']; ?></td>
			<td><?php echo $ligne['taches']; ?></td>
			<td ><?php echo $ligne['lieu']; ?></td>
			<td><?php echo $ligne['dates']; ?></td>
		</tr>
		<?php } ?>
	</table>

<!---------------------------- FORMATIONS -->
	<h2>Formations</h2>
	<?php
		$query = $bdd -> query("SELECT * FROM formation");
	?>

	<table id="formation-index" border="1">
		<thead>
			<th>Formation</th>
			<th>Description</th>
			<th>Date de la formation</th>
		</thead>
		<tr>
			<?php while ($ligne = $query -> fetch()) { ?>
			<td><?php echo $ligne['formation']; ?></td>
			<td><?php echo $ligne['description']; ?></td>
			<td><?php echo $ligne['dates_formation']; ?></td>
		</tr>
		<?php } ?>
	</table>

</div>
<div class='clear'></div>

<?php require_once('inc/bas.inc.php') ?>


