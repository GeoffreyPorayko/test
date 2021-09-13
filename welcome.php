<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My account</title>
    </head>
    <body>
        <p>
					<?php
					session_start();
					if(isset($_SESSION["user"])){
					echo "Hello ".$_SESSION["user"];
					}else header("Location:localhost/signin.php");
					?>
			 !<br>
			Welcome on your account.
		</p>
		<a href="./signout.php">Déconnexion</a>
    </body>
</html>
