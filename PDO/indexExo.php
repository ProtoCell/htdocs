<?php 

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>De la part de l'Elite</title>
</head>
<body>
		
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<fieldset>
			<legend>Recherche de films</legend>
		<p>Titre : <SELECT name="titre" >
			<OPTION value ='0'>

				<?php  
				
				?>
	
		</SELECT></p>
		<p>Annee : <SELECT name="annee" >
			<OPTION>

			<?php  
				
				?>

		</SELECT></p>
		<input type="submit" name="sub" value="valider">
		</fieldset>
	</form>
</body>
</html>

<?php 



 ?>