<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nom">
        <input type="submit" value="confirmer">
    </form>
    <?php
    
    
    $_SESSION["nom"]=$_GET["nom"];
    if($_SESSION["nom"] =='')
    {
        echo "erreur";
    }
    else
    {
        echo"tu es:  ".$_SESSION["nom"]." . ";
    }

    ?>
</body>
</html>