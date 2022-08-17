<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('./bdd.php');

if (isset($_POST['hide'])) {

	$viderbb = null;
	$surfacebb = null;
	$portebb = null;
	$interieurbb = null;

	if (isset($_POST['viderbb'])) {
		$viderbb = $_POST['viderbb'];
	}
	if (isset($_POST['portebb'])) {
		$portebb = $_POST['portebb'];
	}
	if (isset($_POST['surfacebb'])) {
		$surfacebb = $_POST['surfacebb'];
	}
	if (isset($_POST['interieurbb'])) {
		$interieurbb = $_POST['interieurbb'];
	}


	if ($viderbb != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('Biberonnerie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $viderbb )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($portebb != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('Biberonnerie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $portebb )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($surfacebb != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('Biberonnerie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $surfacebb )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($interieurbb != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('Biberonnerie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $interieurbb )";
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
	<title>Biberonnerie</title>
</head>

<body>

	<?php
	include('../Home/include/popup.php');
	include('../Home/head.php');
	include('../Home/nav.php');
	?>
	<form action="" method="POST">
		<div class="p-5 flex items-center flex-col justify-center mb-24 ">
			<h1 class="mb-10 text-3xl font-bold italic underline text-violet-400">Biberonnerie</h1>
			<div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-lime-100  rounded-3xl flex justify-align shadow-2xl flex-col mb-76 font-serif">
				<div class="mt-10 mb-5 bg-lime-200 flex rounded-lg flex justify-align text-center">
					<input type="hidden" name="hide">

					<input type="checkbox" value="9" id="viderbb" name="viderbb" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="viderbb">Vider la biberonnerie et les frigos des aliments</label>
				</div>
				<div class="mt-5 mb-5 bg-lime-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="10" class="ml-2 autofill:bg-yellow-200" id="surface" name="surface">
					<label class="m-2 text-lg lg:text-xl" for="surfacebb">Surface: Robinetterie et eviers/ Plan de change complet/ Poubelle</label>
				</div>

				<div class="mt-5 mb-5 bg-lime-200 flex rounded-lg flex justify-align">
					<input type="checkbox" value="11" id="portebb" name="portebb" class="ml-2">
					<label class="m-2 text-lg lg:text-xl ml-2" for="portebb">Porte et poignes: Frigo et biberonnerie </label>
				</div>
				<div class="mt-5 mb-5 bg-lime-200 flex rounded-lg flex justify-align-left">
					<input type="checkbox" value="12" id="interieurbb" name="interieurbb" class="ml-2">
					<label class="m-2 text-lg lg:text-xl ml-2" for="interieurbb">Interieur: Frigo et etagère </label>
				</div>
				<button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>


			</div>
		</div>
	</form>
</body>



</html>