<!DOCTYPE html>
<html>
<head> <!-- Il faut préciser "#user" afin d'éviter de changer les autres éléments sur les autres pages-->
	<style>
		#user {
			float: right;
			margin-right: 20px;
			margin-top: 10px;
		}	

        		#user p {
			float: right;
            margin-top: 15px;
			font-size: 2em;
		}
		
		#user img 
		{
			width= 40px height= 50px
		}
		#user a { 
			text-decoration: none;  
			color: inherit;  
			display: block; 
			height: 100%; 
		}

		#retour {
		float: right;
		margin-right: 20px;
		margin-top: 10px;
	}
	
	#retour a {
		text-decoration: none;
		background-color: #03224C;
		color: white;
		padding: 10px 20px;
		border-radius: 5px;
	}

		
	</style>
</head>
<body>
    <?php
    $user_name = $_SESSION["login"];
    $user_icon = "assets/image/user.png";
     ?>
	<header>
		<div id="user">
			<img src="<?php echo $user_icon; ?>" alt="Icône utilisateur">
			<p><a href="compte utilisateur.php"><?php echo $user_name ?></a></p>
</div>
		


	</header>
</body>
</html>