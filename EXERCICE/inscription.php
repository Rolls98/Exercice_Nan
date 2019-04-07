<?php


	require 'database.php';

	$db = database::connexion();

	$nom = $prenom  = $commune = $nomError = $prenomError = $dateError = $dateN = $ajout =$sexe = '';


	$verifie = false;

	if(!empty($_POST))
	{
		$nom = CheckInput($_POST['nom']);
		$prenom = CheckInput($_POST['prenom']);
		$dateN = CheckInput($_POST['dateN']);
		$sexe = CheckInput($_POST['sexe']);
		$commune = $_POST['commune'];

		$verifie = true;

		if(empty($nom))
		{
			$nomError = 'Veuillez saisir votre nom svp';
			$verifie = false;
		}

		if(empty($prenom))
		{
			$nomError = 'Veuillez saisir votre prenom svp';
			$verifie = false;
		}

		if(empty($dateN))
		{
			$dateError = 'Votre date de Naissance svp';
			$verifie = false;
		}

		if(empty($sexe))
		{
			$sexeError = 'Votre sexe svp';
			$verifie = false;
		}

		if($commune == 'selectionner votre commune')
		{
			$verifie = false;
		}

	}

	if($verifie)
	{
		$db = database::connexion();
		$ajout = $db->prepare('INSERT INTO members(nom,prenom,date_naissance,sexe,commune) VALUES (?,?,?,?,?)');
		$ajout->execute(array($nom,$prenom,$dateN,$sexe,$commune));
		$nom = $prenom  = $commune = $nomError = $prenomError = $dateError = $dateN = $ajout =$sexe = '';
		header('location: exercice.php?success=1');
		database::deconnexion();
	}
	else
		header('location: exercice.php?success=0');



	function CheckInput($data)
	{
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripcslashes($data);

		return $data;
	}

?>
