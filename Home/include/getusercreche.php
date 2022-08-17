<?php
include "../bdd.php";

if ($_POST['id']) {
	$id = $_POST['id'];
	$sql = "SELECT * FROM personnel WHERE Id_creche =  $id";
	$a = $BdD->query($sql);

	while ($user = $a->fetch()) {
		echo '<option value="' . $user['id_perso'] . '">' . $user['prenom_perso'] . ' ' . $user['nom_perso'] . '</option>';
	}
}




