<?php $success= isset($_GET['success']) ? $_GET['success']:'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquerry.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="heading col-md-6">
		
				<h1>INSCRIVEZ-VOUS ICI</h1>

			</div>


			<div class="myform col-md-6">
				<?php 
						if($success == '1')
						{
						echo '<div class="alert alert-success">';
						echo '<p>Votre inscription a été effectué avec success</p>';
						echo '</div>';
						}
						else if($success == '0')
						{
						echo '<div class="alert alert-danger">';
						echo '<p>Vous devrez remplir les champs obligatoirement</p>';
						echo '</div>';
						}
					
				?>
								
				<div class="container-fluid">
					<div class="row">
						<form method="POST" action="inscription.php" class="form-group">
							<div class="col-md-6">
								<label for="nom">Nom :</label>
								<input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre nom" class="form-control" value="">
							</div>
							<div class="col-md-6">
								<label for="prenom">Prenom :</label>
								<input type="text" name="prenom" id="prenom" placeholder="Veuillez saisir prenom" class="form-control">
							</div>
							<div class="col-md-12">
								<label>Date de Naissance</label>
								<input type="date" max="31" name="dateN" class="form-control" value=''>
							</div>
							<div class="col-md-12">
								<label>Sexe</label><br>
								<input type="radio" name="sexe" value="M">Masculin<br>
								<input type="radio" name="sexe" value="F">Feminin
							</div>
							<div class="col-md-12">
								<select name="commune" class="form-control">
									<option value="Koumassi">Koumassi</option>
									<option value="Marcory">Marcory</option>
									<option value="Treichville">Treichville</option>
									<option value="Plateau">Plateau</option>
									<option value="Cocody">Cocody</option>
									<option value="Adjame">Adjame</option>
									<option value="Abobo">Abobo</option>
									<option value="Yopougon">Yopougon</option>
									<option value="Port-bouet">Port-bouet</option>
									<option value="Attecoube">Attecoubé</option>
									<option value="selectionner votre commune" selected>Selectionner votre commune</option>
								</select>
							</div>

							<div class="col-md-12 action-button">
								<button type="submit" value="INSCRIPTION" class="form-control">INSCRIPTION</button>
							</div>
							<?php
								if($success=='1')
								{
								echo '<div class="col-md-12">';
								echo '<a class="btn btn-primary" href="liste.php">Voir la liste des inscrits</a>';
								echo '</div>';
								} 
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>