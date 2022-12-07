<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $NombreAleaoire = rand(0,100);

        ?>
        <div>
            <?php
            //exo 1 php paire bleue, impaire rouge avec la boucle if  
             if($NombreAleaoire%2==1)
             {
                echo "<div style='background-color:red;'>$NombreAleaoire je suis impaire";
             }
             else
             {
                echo "<div style='background-color:blue;'>$NombreAleaoire je suis paire";
             }
            ?>
        </div>


    
    
</body>
</html>


