<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px"> 
    <?php
    $i;
       $tableau = array(
            0=>array('nom'=>'nom','prenom'=>'prenom','motdepasse'=>'mot de passe'),
            1=>array('nom'=>'lefevre','prenom'=>'tom','motdepasse'=>'fdmkhq'),
            2=>array('nom'=>'tiennot','prenom'=>'tibo','motdepasse'=>'1m60'),
            3=>array('nom'=>'lopes','prenom'=>'damien','motdepasse'=>'unpeuchiant'),
       );
    for($i=0;$i<4;$i++)
    {
        echo"<tr><td>".$tableau[$i]['nom']." - ".$tableau[$i]['prenom']." - ".$tableau[$i]['motdepasse']."</td></tr>";
    }
    ?>
    </table>
</body>
</html>