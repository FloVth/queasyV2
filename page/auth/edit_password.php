<!--HTML CODE MODIFICATION DE MOT DE PASSE-->
<!DOCTYPE html>
<html>
    <body>
        <div class="Votre_Espace">Modifiez votre mot de passe</div>
        <form action="index_queasy.php?route=checkmdp" method="post">
            <?php if(isset($_GET["error"])){echo '<div style="color:red; font-family:Visby; font-size:20px; text-align:center;">' . $_GET["error"] . '</div>';}?>
            <input type="password" name="oldpsd" value="" placeholder="Votre mot de passe actuel"/>
            <br>
            <input type="password" name="psd" value="" placeholder="Votre ancien mot de passe actuel"/>
            <br>
            <input type="password" name="confpsd" value="" placeholder="Confirmation de votre mot de passe actuel"/>
            <br>
            <input  class="btn" type="submit" name="form1" value="Modifier"/>
            <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
        </form>
    </body>
</html>