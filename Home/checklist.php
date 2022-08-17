<!DOCTYPE html>
<html lang="en">


<?php
include('head.php');
include('nav.php');
include('bdd.php');
$sql = "SELECT * FROM trace ";
$tache = $BdD->query($sql);

?>

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
            font-size: 1em;
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

        /* .content-table tbody tr:nth-last-of-type(even) {
            background-color: #f3f3f3;
            margin-bottom: 25px;
        } */

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #008B8B;
        }
    </style>


</head>

<body>
    <div class="p-5 flex items-center flex-col justify-center mb-24">
    <h1 class="flex justify-center text-3xl font-bold italic underline text-violet-400"> Traçabilité des etiquettes</h1>
        <table class="table-auto content-table">
            <thead>
                <tr class="ml-10 border-b-4 rounded-sm border-teal-100 text-center">
                    <th>Libelle </th>
                    <th>Date et heure</th>
                    <th>Photo etiquette</th>
                    <th>Commentaire</th>
                </tr>
            </thead>
            <tbody>



                <?php while ($a = $tache->fetch()) : ?>

                    <tr class="border-b-2 border-violet-100 m-10">
                        <td class=" border-r-4 border-violet-100 "><?= $a['libelle'] ?></td>
                        <td class=" border-r-4 border-violet-100 "><?= $a['date'] ?></td>
                        <td class=" border-r-4 border-violet-100 "><img src="<?= $a['photo'] ?>" alt=""></td>
                        <td class=" border-r-4 border-violet-100 "><?= $a['com'] ?></td>
                    </tr>

                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>



</html>