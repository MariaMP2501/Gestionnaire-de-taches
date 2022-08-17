<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('../Home/bdd.php');

if (isset($_POST['hide'])) {




	$porte = null;
	$eviers = null;
	$surface = null;
	$interieur = null;

	if (isset($_POST['porte'])) {
		$porte = $_POST['porte'];
	}
	if (isset($_POST['eviers'])) {
		$eviers = $_POST['eviers'];
	}
	if (isset($_POST['surface'])) {
		$surface = $_POST['surface'];
	}
	if (isset($_POST['interieur'])) {
		$interieur = $_POST['interieur'];
	}

	if ($porte != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle pro',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $porte )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($eviers != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle pro',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $eviers )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($surface != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle pro',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $surface )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($interieur != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle pro',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $interieur )";
		$BdD->exec($sql);
		// echo $sql;
	}
	$_SESSION['valider'] = 1;
}


?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Nettoyage Salle Pro</title>
</head>

<body>

	

	<?php

	include('../Home/include/popup.php');
	include('../Home/head.php');
	include('../Home/nav.php');
	?>
	<form action="" method="POST">
		<div class="p-5 flex items-center flex-col justify-center mb-24">
			<h1 class="mb-10 text-3xl font-bold italic underline text-pink-500o">Nettoyage Salle Pro</h1>
			<div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-pink-300 rounded-3xl flex justify-align shadow-2xl flex-col mb-76  font-serif ">
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<!--
						-Ajouter des values id_tache_unique de la bdd
						-Ajout du form avec la methode post
						-creer <input type="hidden" name="hide">
						-faire le php

				
				-->
					<input type="hidden" name="hide">

					<input type="checkbox" value="1" id="surface" name="surface" class="ml-2">
					<label class="m-2 text-lg lg:text-xl text-center" for="surface">Surface et plan de travail</label>
				</div>

				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="2" id="porte" name="porte" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="porte">Porte et poignes </label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="3" id="eviers" name="eviers" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="eviers">Ceramique eviers x3 et robinet </label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="4" id="interieur" name="interieur" class="ml-2">
					<label class="m-2 text-lg lg:text-xl font-family:SFMono-Regular" for="interieur">Interieur de placards, micro-onde, carrelage, bureau</label>
				</div>
				<button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>
	</form>
	</div>
	</div>

</body>



</html>