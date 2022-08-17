<?php 

include "../bdd.php";

if(isset($_POST["url"])){
	$sql = "INSERT into trace(libelle,photo,com) VALUES('trace',  '".$_POST["url"]."' ,'commentaire')";
	$BdD->exec($sql);
}