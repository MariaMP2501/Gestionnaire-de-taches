<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('../Home/bdd.php');

if (isset($_POST['hide'])) {
	$surfacech = null;
	$portech = null;
	$toilettesch = null;
	$etagerech = null;

	if (isset($_POST['surfacech'])) {
		$surfacech = $_POST['surfacech'];
	}
	if (isset($_POST['portech'])) {
		$portech = $_POST['portech'];
	}
	if (isset($_POST['toilettesch'])) {
		$toilettesch = $_POST['toilettesch'];
	}
	if (isset($_POST['etagerech'])) {
		$etagerech = $_POST['etagerech'];
	}


	if ($surfacech != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle de change',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $surfacech )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($portech != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle de change',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $portech )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($toilettesch != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle de change',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $toilettesch )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($etagerech != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage salle de change',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $etagerech )";
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
	<title>Nettoyage Salle de Change</title>
</head>

<body>

	<?php
	include('../Home/include/popup.php');
	include('../Home/head.php');
	include('../Home/nav.php');
	?>
	<form action="" method="POST">
		<div class="p-5 flex items-center flex-col justify-center mb-24">
			<h1 class="mb-10 text-3xl font-bold italic underline text-pink-400">Nettoyage Salle de Change</h1>
			<div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-pink-300 rounded-3xl flex justify-align shadow-2xl flex-col mb-76  font-serif">
				<div class="mt-10 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="hidden" name="hide">
					<input type="checkbox" value="5" id="surfacech" name="surfacech" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="surfacech">Surface: Robinetterie et eviers/ Plan de change complet</label>
				</div>

				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="6" id="portech" name="portech" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="portech">Porte et poignes </label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="7" id="toilettesch" name="toilettesch" class="ml-2">
					<label class="ml-2 text-lg lg:text-xl" for="toilettesch">Toilettes: Chasse d'eau et Ceramique </label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="8" id="etagerech" name="etagerech" class="ml-2">
					<label class="m-2 text-lg lg:text-xl" for="etagerech">Etagère des paniers</label>
				</div>
				<button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>


			</div>
		</div>
	</form>

</body>



</html>