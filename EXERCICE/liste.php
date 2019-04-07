<?php
	require 'database.php';

	$db = database::connexion();

?>


<!DOCTYPE html>
<html>
<head>
	<title>La liste des inscrits</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/querry.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container liste">
		<h1>La liste des membres inscrits</h1>
		<table border="2px solid black" class="table table-striped table-bordered">
			<thead>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Commune</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php
					$stament = $db->query('SELECT * FROM members');

					while($row = $stament->fetch())
					{
						echo '<tr>';
						echo '<td>'.$row['id'].'</td>';
						echo '<td>'.$row['nom'].'</td>';
						echo '<td>'.$row['prenom'].'</td>';
						echo '<td>'.$row['commune'].'</td>';
						echo '<td> <a class="btn btn-primary" href="profil.php?id='.$row['id'].'"> Voir Profil </a>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>