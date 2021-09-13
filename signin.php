<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signin</title>
	</head>
	<body>
		<h1>Signin</h1>
		<?php
		if($_SERVER['REQUEST_METHOD']== "GET"){
			echo "<form method='post' action='authenticate.php'>
		<label for='login'>Utilisateur</label>
		<input type='text' name='login' value=''><br><br>
		<label for='passwd'>Mot de passe</label>
		<input type='password' name='password' value=''><br><br>
		<input type='submit' value='Connect me'>
		</form>";
		}
		 ?>
		 <div class="message">
		 		<?php
					session_start();
					if(isset($_SESSION["message"])){
						if($_SESSION["message"]!=""){
							echo "<p style='color:red;font-style:italic;'>".$_SESSION["message"]."</p>";
						}
					}
				 ?>
		 </div>
	</body>
</html>
