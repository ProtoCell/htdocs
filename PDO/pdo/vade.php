<?php 
	include_once('connectdatabase.php');
	$idcom=connectobjet("AFPA","myparam");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Formulaire</title>
    <meta charset="utf-8">
</head>
<body>
    <?php

$id=$_POST['idStagiaire'];

$requet = "SELECT * FROM stagiaire WHERE Numstagaire = $id";
$result = $idcom->query($requet);

if(!$result){
    echo "erreur";
} else{ while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $nom = $row["nom"];
        $prenom = $row["prenom"];
        $adresse = $row["adresse"];
        $ville = $row["ville"];
        $cp = $row["code_postal"];
        $tel = $row["tel"];
        $email = $row["email"];
        $forma = $row["codeformation"];
    }
}

     if ($forma == 17) {
        $validé1 = "checked";
     }
     else{
         $validé2 = "checked";
     }


?>
<h1>Vos informations</h1>
    <form action="vade.php" method="post">
        <fieldset>
      		<legend>Veuillez mettre à jour vos données</legend>
      	<p><label for="idStag">iD</label>    
        <input type="text" name="idStag"  value="<?php echo $id ?>"></p>
        <p><label for="nom">Votre Nom</label>    
        <input type="text" name="nom"  value="<?php echo $nom ?>"></p>
    
        <p><label for="prenom">Votre prénom</label>
        <input type="text" name="prenom"  value="<?php echo $prenom ?>"></p>

        <p><label for="adresse">Votre Adresse</label>
        <input type="text" name="adresse"  value="<?php echo $adresse ?>"></p>

        <p><label for="ville">Votre Ville</label>
        <input type="text" name="ville" value="<?php echo $ville ?>"></p>

        <p><label for="CP">Votre Code Postal</label>
        <input type="number" name="cp"  min="5" value="<?php echo $cp ?>"></p>

        <p><label for="tel">Votre téléphone</label>
        <input type="number" name="telephone" min="10" value="<?php echo $tel ?>"></p>

        <p><label for="mail">Email</label>
        <input type="mail" name="email" pattern=".+@gmail.com" placeholder="Mail" value="<?php echo $email ?>"></p>
       
            <p>A quelle formation appartenez vous ?</p>
        <div>
             <input type="radio" name="codeFormation" value="17" <?php echo @$validé1 ?>>
              <label for="001">Dev web</label>
        </div>

        <div>
             <input type="radio" name="codeFormation" value="002" <?php echo @$validé2 ?>>
             <label for="002">web design</label>
        </div>

       
        <input type="submit" id="bouton" name="MaJ" value="Mettre à Jour">
    
    </fieldset>
    </form>
    <?php 

    if(isset($_POST['MaJ'])){
    $idSta=$_POST["idStag"];
   	$name =$_POST["nom"];
    $pname = $_POST["prenom"];
    $add = $_POST["adresse"];
    $vil = $_POST["ville"];
    $c_p = $_POST["cp"];
    $phone = $_POST["telephone"];
    $mail = $_POST["email"];
	
		
	$requete = "UPDATE stagiaire SET nom = '$name', prenom = '$pname',
    adresse = '$add', ville = '$vil', code_postal = '$c_p', tel = '$phone', email = '$mail'
    WHERE Numstagaire=$idSta";

   
	$idcom->query($requete);

	//$nouveau = $idcom->insert_id;
	echo "Votre mise à jour est réussie !";

	if(!$idcom) {
    die('Erreur SQL !'.$requete.'<br />'.mysql_error());
   }
   else {
     echo '<script language="javascript">';
		echo 'alert("Mise à Jour Réussie")';
		echo '</script>';
   }
	}

	$idcom->close();



     ?>

     <script>
     	
     </script>

</body>
</html>