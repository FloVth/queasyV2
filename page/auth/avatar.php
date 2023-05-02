<head>
    <title>QUEASY | AVATAR</title>
</head>
<body>
<?php


?>
    <form action="index_queasy.php?route=checkavatar" method="post"> 
        <?php if(isset($_GET["error"])){echo '<div style="color:red; font-family:Visby; font-size:20px; text-align:center;">' . $_GET["error"] . '</div>';}?>
        <input type="file" name="file"/>
        <br>
        <input class="btn" type="submit" name="modifier" value="Modifier"/>
    </form>
</body>
</html>