<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
include('../Home/bdd.php');

if (isset($_POST['hide'])) {
	$gaz = null;
	$desinfecter = null;
	$draps = null;
	$lit = null;
// echo "ici";
	if (isset($_POST['gaz'])) {
		$gaz = $_POST['gaz'];
	}
	if (isset($_POST['desinfecter'])) {
		$desinfecter = $_POST['desinfecter'];
	}
	if (isset($_POST['draps'])) {
		$draps = $_POST['draps'];
	}
	if (isset($_POST['lit'])) {
		$lit = $_POST['lit'];
	}


	if ($gaz != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Dortoir',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $gaz )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($desinfecter != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Dortoir',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $desinfecter )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($draps != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Dortoir',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $draps )";
		$BdD->exec($sql);
		// echo $sql;
	}
	if ($lit != null) {
		$sql = "INSERT into tache (type_de_tache,id_perso,id_creche,id_tache_unique) VALUES('nettoyage Dortoir',  '" . $_SESSION['user'] . "' ,'" . $_SESSION['creche'] . "', $lit )";
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
    <title>Nettoyage Dortoir</title>
</head>

<body>

    <?php
	include('../Home/include/popup.php');
    include('../Home/head.php');
    include('../Home/nav.php');
    ?>
    <form action="" method="POST">
        <div class="p-5 flex items-center flex-col justify-center mb-24 ">
            <h1 class="mb-10 text-3xl font-bold italic underline text-pink-500">Dortoir</h1>
            <div class="w-[80%] py-5 px-5 sm:w-1/3 h-1/2 bg-pink-300 rounded-3xl flex justify-align shadow-2xl flex-col mb-76  font-serif ">
                <div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
                
                    <input type="hidden" name="hide">    
                
                    <input type="checkbox" value="21" id="gaz" name="gaz" class="ml-2">
                    <label class="m-2 text-lg lg:text-xl" for="gaz">Passer la gaz et la serpillère</label>
                </div>
                <div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
                    <input type="checkbox" value="22" id="desinfecter" name="desinfecter" class="ml-2">
                    <label class="m-2 text-lg lg:text-xl" for="desinfecter">Desinfecter: Les poignets, le toboggan et les hublots</label>
                </div>
                <div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
                    <input type="checkbox" value="23" id="draps" name="draps" class="ml-2">
                    <label class="m-2 text-lg lg:text-xl" for="draps">Enlever et laver les draps</label>
                </div>


                <div class="mt-5 mb-5 bg-pink-200 flex rounded-lg flex justify-align text-center">
                    <input type="checkbox" value="24" id="lit" name="lit" class="ml-2">
                    <label class="m-2 text-lg lg:text-xl" for="lit">Desinfecter les lits </label>
                </div>

                <button class="mb-5 mt-5 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>

    </form>
    </div>
    </div>


</body>



</html>