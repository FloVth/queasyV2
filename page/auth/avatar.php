<head>
    <title>QUEASY | AVATAR</title>
</head>
<body>
    <!--VOTRE ESPACE-->
    <div class="Votre_Espace">Modifiez votre avatar</div>
<head>
    <title>QUEASY | AVATAR</title>
</head>
<body>
    <!--VOTRE ESPACE-->
    <div class="Votre_Espace">Modifiez votre avatar</div>
    <!--Zone ESPCAE-->
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
    <!--SELECT AVATAR-->
    <section class="wrapp">
        <img id="Image_def" src="public/avatars/default/pictogramme_edit4.jpg"/> <!--Image qui apparait par default-->
            <div class="spacing"></div>
            <div class="spacing"></div>
        <div class="information" >veuillez sélectionner votre avatar :</div>
        <div class="image-wrapper">
                <div class="spacing"></div>
                <div class="spacing"></div>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit2.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit3.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit4.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit5.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit6.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit7.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit8.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit2.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit2.jpg"/>
            <img class="imgCarousel" src="public/avatars/default/pictogramme_edit2.jpg"/>
        </div>
    </section>
    <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
    </div>

    <form method="post">
        <div class="information">Enregistrer comme avatar</div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        <input type="submit"  class="btn_centre" name="dltav" value="Enregistrer"/>
        <div class="spacing"></div>
        <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
    </form>

    <!--CSS CODE-->
    <style>
        #Image_def{
            width: 45%;
            height: 450px;
            object-fit: cover;
            margin-bottom: 10px;
            margin : 0 0 0 350px;
        }
        .imgCarousel{
            width: 100px;
            height: 100px;
            transition: 0.3s;
            
        }
        .imgCarousel:hover{
            width: 120px;
            height: 120px;
            border: 2px solid white;
            margin: 3px;
        }
        img{
            border-radius: 150px;
            cursor: pointer;
        }
        .information {
            font-family: var(--police);
            text-align : center; 
            font-size: 25px;
            margin-bottom: 15px; 
        }
        .btn_centre{
            margin : 0 0 0 475px;
            color: var(--blue);
            font-family: var(--police);
            font-size: 20px;
            border: none;
            outline: none;
            margin-top: 15px;
            padding: 8px 15px;
            background: var(--white);
            border-radius: 15px;
            display: inline-block;
            text-decoration: none;
            align-items: center;
        }
        .image-wrapper{
            padding:0 0 0 150px; 
        }
    </style>
    
    <!--JS CODE-->
        <script>
                let images = Array.from(document.getElementsByClassName("imgCarousel")) //recuperation des element image du carousel
                let Image_def = document.getElementById("Image_def")//recupere l'image par default

            function updateImage(event){
                let image = event.target
                    Image_def.src = image.src
            }
                images.forEach(function(image) {
                image.addEventListener("click", updateImage) //Image clique alors mis a jour 
            });
    </script>
    </body>
</html>