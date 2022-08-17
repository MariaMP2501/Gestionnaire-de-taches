<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Traçabilité</title>
</head>

<body>

	<?php
	include('head.php');
	include('nav.php');
	?>

	<div class="flex flex-col items-center justify-center">
		<h1 class="mb-10 text-3xl font-bold italic underline text-violet-400">
			Numerisation des étiquettes!
		</h1>
		<h3>
			Zicrèche
		</h3>
	</div>



	<?php 

	//ajout image de lien
// 	include "bdd.php";

// $sql = "SELECT photo from trace where id_tache = 2 ";
// $a = $BdD->query($sql);

// while($q = $a ->fetch()){
	
// 	echo "<img src='".$q['photo']."' >";

// }

?>




<img src="" alt="">
	<div class="grid  grid-cols-1 p-5 mt-5 sm:px-52 gap-4 sm:gap-10 xl:gap-18">
		<a href="test.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-amber-50  hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-amber-100 duration-300 shadow-lg ">
				<img src="../icons/barcode1.png" class="w-18" alt="">
				<h2 class="text-center sm:text-lg text-sm">Traçabilité simplifiée</h2>
				<h2 class="text-center  sm:text-lg text-sm">Prise de photos </h2>
			</div>

		</a>


</body>



</html>