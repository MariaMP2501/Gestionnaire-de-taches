<?php
include('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icons/minilogo.png" type="images/x-icon">
	<script src="https://cdn.tailwindcss.com"></script>

	<title>Document</title>
</head>

<body>
	<?php
	include('head.php');
	include('nav.php');
	?>
	<div class="flex flex-col items-center justify-center">
		<h1 class="text-3xl font-bold italic underline text-violet-400 ">
			ZITRAQ
		</h1>
	</div>

	<div class="grid  grid-cols-3 p-5 mt-5 mb-24 sm:px-52 gap-10 xl:gap-18 mb-24">
		<a href="temperature.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-red-50	  hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-red-200 duration-300 shadow-lg ">
				<img src="../icons/temperature.png" class="w-20" alt="">
				<h3>Prise de T°</h3>
			</div>
		</a>
		<a href="test.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg">
				<img src="../icons/qr.png" class="w-20" alt="">
				<h3>Traçabilité</h3>
			</div>
		</a>
		<a href="nettoyage.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-amber-100	shover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-amber-200 duration-300 shadow-lg">
				<img src="../icons/clean2.png" class="w-20" alt="">
				<h3>Nettoyage</h3>
			</div>
		</a>
		<a href="biberonnerie.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-lime-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-lime-200 duration-300 shadow-lg">
				<img src="../icons/Biberonn.png" class="w-20" alt="">
				<h3>Biberonnerie</h3>
			</div>
		</a>
		<a href="historique.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-violet-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-violet-200 duration-300 shadow-lg">
				<img src="../icons/Historique1.png" class="w-20" alt="">
				<h3>Historique tâches</h3>
			</div>
		</a>
		<a href="checklist.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-cyan-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-cyan-200 duration-300 shadow-lg">
				<img src="../icons/photoetiquettes.png" class="w-20" alt="">
				<h3>Historique Etiquettes</h3>
			</div>
		</a>
	</div>

</body>

</html>