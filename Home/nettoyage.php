<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Nettoyage</title>
</head>
<body>

    <?php
    include('head.php');
    include('nav.php');
    ?>
    
    <div class="flex flex-col items-center justify-center">
		<h1 class="mb-10 text-3xl font-bold italic underline text-violet-400">
			Tâches menage!
		</h1>
		<h3>
			Zicrèche
		</h3>
	</div>

	<div class="grid grid-cols-3 sm:grid-cols-2  p-5 mt-5 sm:px-52 gap-10 xl:gap-18 mb-20">
		<a href="../Nettoyage/nettSallePro.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100  hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg ">
				<img src="../icons/menage.png" class="w-18" alt="">
				<h2 class="text-center">Salle Pro</h2>
				<h2 class="text-center"></h2>
			</div>
		</a>
		<a href="../Nettoyage/nettSalleChange.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg">
				<img src="../icons/sallebebe.png" class="w-18" alt="">
				<h3 class="text-center">Salle de change</h3>
				<h3 class="text-center"></h3>
			</div>
        </a>    
        <a href="../Nettoyage/nettSalledeVie.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg">
				<img src="../icons/SalledeVie.png" class="w-14" alt="">
				<h3 class="text-center">Salle de vie</h3>
				<h3 class="text-center"></h3>
			</div>
        </a> 
        <a href="../Nettoyage/nettSection.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg">
				<img src="../icons/porte.png" class="w-14" alt="">
				<h3 class="text-center">Section - Sol</h3>
				<h3 class="text-center"></h3>
			</div>
        </a> 
        <a href="../Nettoyage/nettDortoir.php">
			<div class="w-full h-44 flex flex-col items-center rounded-lg justify-center bg-pink-100 hover:shadow-none transition ease-in-out cursor-pointer hover:-translate-y-1 hover:scale-110 hover:bg-pink-200 duration-300 shadow-lg">
				<img src="../icons/dortoir.png" class="w-14" alt="">
				<h3 class="text-center">Dortoir</h3>
				<h3 class="text-center"></h3>
			</div>
        </a> 

</body>



</html>