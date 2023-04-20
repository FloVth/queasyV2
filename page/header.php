<!DOCTYPE html>
<html>
	<head> 
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	</head>
	<body>
		<!--IMAGE CLIQUABLE AVATAR ADMIN PROG-->
		<div class="edit_profil2">
			<img class="Image_Profil" src="assets/image/user.png" onclick="Profil()" alt='pictogramme edit profil'/>
			<div id="zone_profil" class="edit_profil-content">
        <img class="edit_img" src="assets/image/pictogramme_edit.png" alt='pictogramme edit profil'> <!--sera remplacer par des vrai pdp-->
        <p class="edit_user">Modifie ta photo de profil</p>
        <div class="spacing"></div>
        <p class="edit_user"><?php echo $_SESSION["login"]?></p>
        <p class="edit_user"><?php echo $_SESSION["prenom"]?></p>
        <div class="spacing"></div>
        <div class="spacing"></div>
        <a href="index_queasy.php?route=edit_password" class="edit">Modifie ton mot de passe</a>
        <a href="index_queasy.php?route=Deconnexion" class="edit">Déconnexion</a>
			</div>
		</div>

      <!--ZONE DU PROFIL-->
      <div class="contenue_profil2">
        <pre class="profil2"><?php echo $_SESSION["login"]?>  <?php echo $_SESSION["prenom"]?></pre>
      </div>


		<!--CSS CODE-->
		<style>
			/*Postion de l'image cliquable ainsi que c'est différent elt*/
			.edit_profil2{
        float: left;
			margin: -150px 0 0 1050px;
			}
			.profil2{
				font-size: 30px;
        float: right;
				font-family: var(--police);
        margin: -135px 5px 45px 1000px;
			}
		</style>

        <!--SCRIPT ZONE EDIT USER-->
        <script>
        // Si utilisateur clique sur la photo de profil alors affiche de l'edit menu
        function Profil() {
          document.getElementById("zone_profil").classList.toggle("montrer");
        }
        // Ferme l'edit menu s'il click ailleur que l'image de profil
        window.onclick = function(event) {
          if (!event.target.matches('.Image_Profil')) {
            var edit_profils = document.getElementsByClassName("edit_profil-content"); // On récupere les valeurs se trouvant dans "edit_profil_content"
            var i;
            for (i = 0; i < edit_profils.length; i++) {
              var ouvre_edit_profil = edit_profils[i];
              if (ouvre_edit_profil.classList.contains('montrer')) {
                ouvre_edit_profil.classList.remove('montrer'); //montre le contenu de l'edit user
              }
            }
          }
        }
        </script>  
	</body>
</html>