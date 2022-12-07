<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="champ1">
        <input type="submit" value="confirmer">
    </form>
    <?php
    if(isset($_POST["champ1"]))
    {
        echo"tu es:  ".$_POST["champ1"]." . ";
    }
    else
    {
        echo "saisi ton nom";
    }
    ?>
</body>
</html>