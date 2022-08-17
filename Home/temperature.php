<?php
include('bdd.php');


$sql = "SELECT * FROM personnel";
$personnel = $BdD->query($sql);


if (isset($_POST['plats'])) {
    $plats = $_POST['plats'];
    $havant = $_POST['havant'];
    $tempav = $_POST['tempavant'];
    $hfin = $_POST['hfin1'];
    $tempsortie1 = $_POST['tempsortie1'];
    $hfin1 = $_POST['hfin2'];
    $tempfin2 = $_POST['tempsortie2'];
    $personnel1 = $_POST['personnel'];
    $creche = $_SESSION['creche'];


    $insertsql = "INSERT INTO tache (type_de_tache,id_perso, id_creche, plats, havant, tempav,hfin, hfin1,tempsortie1, tempfin2) VALUES
 ('Plat','" . $personnel1 . "','" . $_SESSION['creche'] . "','" . $plats . "','" . $havant . "','" . $tempav . "','" . $hfin . "','" . $hfin1 . "','" . $tempsortie1 . "', '" . $tempfin2 . "')";
    $BdD->exec($insertsql);

    // echo $insertsql;
    $_SESSION['valider'] = 1;
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
    <title>Prise de temperature</title>
</head>

<body>

    <?php
    include('../Home/include/popup.php');
    include('head.php');
    include('nav.php');
    ?>
    <form action="" method="POST">
        <div class="p-5 flex items-center flex-col justify-center mb-76 ">
            <h1 class="mb-10 text-3xl font-bold italic underline text-violet-400">Prise de temperature</h1>
            <div class="w-[70%] mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-red-50 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Plats" class=" w-[90%] sm:w-3/4 mb-5  flex flex-col">
                    <p class="mb-3 text-xl mt-8 text-center">Plats:</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="plats" id="">
                        <option value="poisson">Poisson</option>
                        <option value="viande">Viande</option>
                        <option value="legume">Legume</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>

                <div id="HeureAv" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Heure avant la mise en chauffe </p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="time" name="havant">
                </div>

                <div id="TemperatureAv" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Temperature avant la mise en chauffe </p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text" name="tempavant">
                </div>

                <div id="Heurefin" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Heure du fin du chauffage (1er Plat)</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="time" name="hfin1">
                </div>

                <div id="TemperatureSortie" class="w-[90%] sm:w-3/4 mb-5  flex flex-col">
                    <p class="mb-3 text-xl text-center">Temperature à la sortie du four °C (1er Plat) </p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text" name="tempsortie1">
                </div>
                <div id="Heurefin2" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Heure du fin du chauffage (dernier Plat)</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="time" name="hfin2">
                </div>
                <div id="TemperatureSortie2" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Temperature à la sortie du four °C (dernier Plat) </p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text" name="tempsortie2">
                </div>
                <div id="TemperatureSortie2" class=" w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">Visa du professionnel </p>
                    <select class="h-8  mb-2 rounded-xl text-center" type="text" name="personnel">
                        <?php
                        while ($user = $personnel->fetch()) {
                            echo '<option value="' . $user['id_perso'] . '">' . $user['prenom_perso'] . ' ' . $user['nom_perso'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <button class="mb-10 mt-10 text-xl py-2 px-4 cursor-pointer bg-red-300 text-white font-semibold rounded-lg shadow-md hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" type="submit">Valider</button>
            </div>

        </div>
    </form>
</body>
<script>
    function searchuser(id) {
        $.post('include/getusercreche.php', {
            id: id
        }, function(data) {
            $("#userplace").html(data);
        })
    }
</script>

</html>