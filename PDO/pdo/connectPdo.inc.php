<?php
function connexPdo($base,$param) {
	include_once($param.".inc.php"); // récupération des paramètres de connexion
	$dsn="mysql:host=".HOST.";dbname=".$base;
	$user=USER;
	$pass=PASS;
	try {
		$idcom = new PDO($dsn,$user,$pass); // $idcom est un objet PDO
		return $idcom;
	}
	// En cas d’échec, un bloc catch crée un objet PDOException qui
 	// permet d’afficher un message d’erreur en appelant la méthode getMessage()
	catch(PDOException $except) {
		echo"Échec de la connexion",$except->getMessage();
		return FALSE;
		exit();
	}
}
?>