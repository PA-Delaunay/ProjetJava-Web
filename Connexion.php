<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page de connexion </title> 
	</head> 
	<body> 
		<?php echo "Connexion";
		// start a session 
		session_start();

		?>
		<form method ="get" action ="retourConnexion.php"> 
			<p> 
				login : <input type = "text" name="login" /> </br>
				mot de passe : <input type = "password" name="password" /> </br> 
				<input type ="submit" value ="connexion" /> 
			</p>
		</form>

		<?php echo "<a href ='Page1.php'> S'incrire </a>"; 


		?> 
	</body>
</html>

