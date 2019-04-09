<?php 

define("HOST","localhost"); // création des constantes de connexion
define("USER","root");
define("PASS","root");
define("PORT",8889);


if (isset($_POST['subm'])) { // récupération du formulaire
	$ville= $_POST['ville'];
	$numStagiaire= $_POST['number'];

}

$idcom = new mysqli (HOST, USER, PASS, "stagiaire"); // objet de connexion

if(!$idcom) { 
echo "<script type=text/javascript>";
echo "alert('Connexion impossible à la base)</script>"; 
} 
 ?>