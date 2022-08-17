<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('../Home/bdd.php');

if (isset($_POST['hide'])) {
	$surface = null;
	$sol = null;
	$etagere = null;
	
	if (isset($_POST['surface'])) {
		$surface = $_POST['surface'];
	}
	if (isset($_POST['sol'])) {
		$sol = $_POST['sol'];
	}
	if (isset($_POST['etagere'])) {
		$etagere = $_POST['etagere'];
	}



	if ($surface != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Section - Sol',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $surface )";
		$BdD->exec($sql);
	}
	if ($sol != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Section - Sol',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $sol )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($etagere != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Section - Sol',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $etagere )";
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
	<title>Nettoyage Section -Sol</title>
</head>

<body>

	<?php
	include('../Home/include/popup.php');
	include('../Home/head.php');
	include('../Home/nav.php');
	?>
	<form action="" method="POST">
		<div class="p-5 flex items-center flex-col justify-center mb-24">
			<h1 class="mb-10 text-3xl font-bold italic underline text-pink-500">Section - Sol</h1>
			<div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-pink-300 rounded-3xl flex justify-align shadow-2xl flex-col mb-76  font-serif">
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center bg-pink-200 flex rounded-lg flex justify-align text-center">
				<input type="hidden" name="hide">
					<input type="checkbox" value="13" id="surface" name="surface" class="ml-2">
					<label class="m-2 text-lg lg:text-xl text-center" for="surface">Surface: Meuble jeu, dinette, tables chaises, blocs moteurs, tapis et poignets</label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="14" id="sol" name="sol" class="ml-2">
					<label class="m-2 text-lg lg:text-xl text-center" for="sol">Sol: Entrée, toilette, salle de change, section</label>
				</div>

				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="15" id="etagere" name="etagere" class="ml-2">
					<label class="m-2 text-lg lg:text-xl text-center" for="etagere">Etagère des paniers</label>
				</div>
				<button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>

			</div>
		</div>
	</form>

</body>



</html>