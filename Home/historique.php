<?php
include('head.php');
include('nav.php');
include('bdd.php');

// echo $_SESSION['creche'];

$sql = "SELECT * FROM tache where id_creche = '" . $_SESSION['creche'] . "'";
$tache = $BdD->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

    <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px 25px;
            font-size: 0.8em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgb(0, 0, 0, 0.30);
        }

        .content-table thead tr {
            background-color: #E0FFFF;
            color: #008B8B;


        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-last-of-type(even) {
            background-color: #f3f3f3;
            margin-bottom: 25px;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #008B8B;
        }
    </style>
</head>

<body>
    <div class="p-5 flex items-center flex-col justify-center mb-24">
        <h1 class="mb-10 text-3xl font-bold italic underline text-violet-400"> Historique de Tâches</h1>
        <table class="table-auto content-table m-76">
            <thead class="m-15">
                <tr class="ml-10 border-b-4 rounded-sm border-teal-100 text-center">
                    <th>Type de tache </th>
                    <th>Date et heure</th>
                    <th>Personnel</th>
                    <th>Information supplementaire</th>
                    <th>Plat</th>
                </tr>
            </thead>
            <tbody>

                <?php


                while ($a = $tache->fetch()) :
                    $perso = "SELECT * FROM personnel WHERE id_perso = '" . $a['id_perso'] . "'";
                    $personnel = $BdD->query($perso);

                    $tacheunique = "SELECT * FROM tache_unique WHERE id_tache_unique = '" . $a['id_tache_unique'] . "'";
                    $latache = $BdD->query($tacheunique);

                ?>
                    <tr class="border-b-2 m-10 border-teal-100">
                        <td class="border-r-4 border-teal-100 "><?= $a['type_de_tache'] ?></td>
                        <td class=" border-r-4 border-teal-100 "><?= $a['date_time'] ?></td>
                        <?php while ($b = $personnel->fetch()) : ?>
                            <td class=" border-r-4 border-teal-100 "> <?= $b['nom_perso'] . " " . $b['prenom_perso']  ?></td>
                        <?php endwhile;
                        if (!isset($a['id_tache_unique'])) { ?>
                            <td class=" border-r-4 border-teal-100 ">heure avant chaufage : <?= $a['havant'] ?> - Temperature avant chaufage : <?= $a['tempav'] ?>°c - Heure fin chauffage 1er :<?= $a['hfin1'] ?></td>
                            <?php
                        } else {
                            while ($c = $latache->fetch()) : ?>
                                <td class=" border-r-4 border-teal-100 "><?= $c['type'] . " - " . $c['description'] ?></td>
                        <?php endwhile;
                        }
                        ?>

                        <td class=" border-r-4 border-teal-100 "><?= $a['plats'] ?></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>

</body>



</html>