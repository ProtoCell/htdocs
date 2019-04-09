<?php 
include_once('pdo/connectPdo.inc.php');
$idcom=connexPdo("bdfilms","myparam");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<fieldset>
			<legend>Recherche de films</legend>
		<p>Titre : <SELECT name="titre" >
			<OPTION value ='0'>

				<?php  
				$i=6;
				$abc = $idcom->query("SELECT * FROM films ");
				while ($row = $abc->fetch()) {
					$i++;
					echo "<option value='$i'>".$row['Nom'];
				}
				?>
	
		</SELECT></p>
		<p>Annee : <SELECT name="annee" >
			<OPTION>

			<?php  
				$stmt = $idcom->query("SELECT * FROM films ");
				while ($row = $stmt->fetch()) {
					echo "<option>".$row['annee'];
				}
				?>

		</SELECT></p>
		<input type="submit" name="sub" value="valider">
		</fieldset>
	</form>
</body>
</html>

<?php 

if(isset($_POST['sub'])){
	$annee = $_POST['annee'];
	$ID = $_POST['titre'];
	
	if($annee!=""){
		$stmt = $idcom->query("SELECT * FROM films WHERE annee =$annee");
		//var_dump($stmt);
		while ($row = $stmt->fetch()) {
	    	echo $row['Nom']."<br>".$row['annee']."<br>".$row['realisateur']."<br>".$row['budget']." $<br>".$row['genre']."<br>".$row['duree']." min";
			$stmt->closeCursor();
		}
	}
	elseif($ID!=0){
		
   		$abc = $idcom->query("SELECT * FROM films WHERE id = $ID");

		while ($row = $abc->fetch()) {
	    	echo $row['Nom']."<br>".$row['annee']."<br>".$row['realisateur']."<br>".$row['budget']." $<br>".$row['genre']."<br>".$row['duree']." min";
			$abc->closeCursor();
			
		}
	}
}





 ?>