<?php
include('bdd.php');



$sql = "SELECT * FROM personnel";
$personnel = $BdD->query($sql);

$sql = "SELECT * FROM creche";
$creches = $BdD->query($sql);


if(isset($_POST['userplace'])){
	// echo 'ici';
	$_SESSION['user'] = $_POST['userplace'];
	$_SESSION['creche'] = $_POST['creche'];
	$_SESSION['valider'] = 0;


    // echo $_SESSION['creche'];
    header('location:./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Logging</title>
</head>

<body>

    <?php
    include('head.php');
    include('nav.php');
    ?><form  method="POST">
    <div class=" flex items-center flex-col justify-center">
        <h1 class="mb-10 text-3xl font-bold italic underline text-violet-400 ">Connexion à la crêche</h1>
        <div class="w-[80%] mb-24 sm:w-1/3 h-1/2 bg-teal-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col ">
            <div id="creche" class=" flex flex-col">
				
                <p class="mb-3 text-xl mt-8 text-center">Choisir votre crêche</p>
                <select onchange="searchuser(this.value)" class="h-8 mb-10 rounded-xl" name="creche" id="">
					<option value=""></option>
                <?php
                        while ($lacreche = $creches->fetch()) {
                            echo '<option value="' . $lacreche['id_creche'] . '">' . $lacreche['nom_creche'] . ' ' . '</option>';
                        }
                        ?>
                </select>
            </div>

            <div id="pseudo" class="flex flex-col">
                <p class="mb-3 text-xl text-center">Choisir l'utilisateur </p>
                <select name="userplace" class="h-8 mb-10 rounded-xl text-center" id="userplace">
                </select>
            </div>

            <!-- <div id="mdp-user" class="mb-4 flex flex-col">
                <p class="mb-3 text-xl text-center">Entrer votre mot de passe</p>
                <input class="h-8 mb-2 rounded-xl" type="text">
            </div> -->
            <div>
             <button class="mb-3 text-xl py-2 px-4 cursor-pointer bg-cyan-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">valider</button>
            </div>
			</form>                  
        </div>

    </div>

</body>

<script>
	function searchuser(id){
		$.post('include/getusercreche.php',{
			id : id
		}, function(data){
			$("#userplace").html(data);
		})
	}
</script>

</html>