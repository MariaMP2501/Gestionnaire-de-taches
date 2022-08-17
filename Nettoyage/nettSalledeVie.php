<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('../Home/bdd.php');

if (isset($_POST['hide'])) {
	$gazsv = null;
	$aerer = null;
	$vitre = null;
	$desinfecter = null;
	echo "ici";
	if (isset($_POST['gazsv'])) {
		$gazsv = $_POST['gazsv'];
	}
	if (isset($_POST['aerer'])) {
		$aerer = $_POST['aerer'];
	}
	if (isset($_POST['vitre'])) {
		$vitre = $_POST['vitre'];
	}
	if (isset($_POST['desinfecter'])) {
		$desinfecter = $_POST['desinfecter'];
	}


	if ($gazsv != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Salle de Vie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $gazsv )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($aerer != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Salle de Vie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $aerer )";
		$BdD->exec($sql);
		echo $sql;
	}
	if ($vitre != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Salle de Vie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $vitre )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($desinfecter != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Salle de Vie',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $desinfecter )";
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
	<title>Nettoyage Salle de Vie</title>
</head>

<body>

	<?php
	include('../Home/include/popup.php');
	include('../Home/head.php');
	include('../Home/nav.php');
	?>
	<form action="" method="POST">
		<div class="p-5 flex items-center flex-col justify-center mb-24">
			<h1 class="mb-10 text-3xl font-bold italic underline text-pink-500">Salle de Vie</h1>
			<input type="hidden" name="hide">
			<div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-pink-300 rounded-3xl flex justify-align shadow-2xl flex-col mb-76  font-serif">
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="16" id="aerer" name="aerer" class="ml-2">
					<label class="m2 text-lg lg:text-xl" for="aerer">Aérer la crèche</label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="17" id="desinfecter" name="desinfecter" checked class="ml-2">
					<label class="text-lg lg:text-xl" for="desinfecter">Desinfecter: Les poignets, le tapis et le coin bébé</label>
				</div>

				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="18" id="vitre" name="vitre" class="ml-2 mr-2">
					<label class="text-lg lg:text-xl" for="vitre">Nettoyage: Les hublots et les vitres </label>
				</div>
				<div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
					<input type="checkbox" value="20" id="gazsv" name="gazsv" class="ml-2">
					<label class="text-lg lg:text-xl" for="gazsv">Passer le gaz et la serpillère</label>
				</div>
				<button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>

	</div>
	</div>
	</form>

</body>



</html>