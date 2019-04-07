<?php
	require 'database.php';

	$db = database::connexion();

	$id = isset($_GET['id']) ? $_GET['id'] : '';

	$stament = $db->prepare('SELECT * FROM members WHERE id=?');

	$stament->execute(array($id));

	$row = $stament->fetch();

	session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Voir Profil</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/querry.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="liste1" >
		<h1>Mon profil</h1>
		<h3>Nom : <?php echo $row['nom']?></h3>
		<h3>Prenom : <?php echo $row['prenom']?></h3>
		<h3>Sexe: <?php echo $row['sexe']?></h3>
		<h3>Commune : <?php echo $row['commune']?></h3>
		<h3>Date de Naissance : <?php echo $row['date_naissance']?></h3>
		<a class="btn btn-primary btn-lg" href="liste.php"><span class="glyphicon glyphicon-triangle-left"></span> Retour </a>
	</div>
</body>
</html>