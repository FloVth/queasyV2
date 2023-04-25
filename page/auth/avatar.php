<head>
    <title>QUEASY | AVATAR</title>
</head>
<body>
    <!--VOTRE ESPACE-->
    <div class="Votre_Espace">Modifiez votre avatar</div>
    <!--SELECT AVATAR-->
    <section class="Carousel">
        <img id="principalPhoto" src=""/> <!--image qui sera selectionner, mise en avant-->
        <div class="image">
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
            <img class="imgCarousel" src=""/>
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
        <label>Enregistrer comme avatar</label>
        <input type="submit" class="btn" name="dltav" value="Enregistrer"/>
    </form>

    <!--CSS CODE-->
    <style>
        #principalPhoto{
        width: 50%;
        height: 200px;
        object-fit: cover; /*redmiension l'image*/
        margin-bottom: 10px;
        }
        .imgCarousel{
            width: 50px;
            height: 50px;
            transition: 0.2s;
        }
        .imgCarousel:hover{
            width: 75px;
            height: 75px;
            border: 2px solid color:var(--white); 
            margin: 3px;
        }

        img{
            border-radius: 10px;
            cursor: pointer;
        }
        label {
            font-family: var(--police);
        }
    </style>
    
    <!--JS CODE-->
    <script>
        let images = Array.from(document.getElementsByClassName("imgCarousel"))
        let principalPhoto = document.getElementById("principalPhoto")

    function updateImage(event){
        let image = event.target
        princi.src = image.src
    }
        images.forEach(function(image) {
        image.addEventListener("click", updateImage)
    });
    </script>


    



</body>
</html>