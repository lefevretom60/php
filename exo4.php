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
    $a = rand(1,10);
    $b = rand(-10,10);
    $c = rand(-10,10);
    $Delta = round($b*$b-(4*$a*$c));
    $x0 = round(-$b/(2*$a));
    $x1 = round((-$b-sqrt($Delta))/(2*$a));
    $x2 = round((-$b+sqrt($Delta))/(2*$a));

    if($Delta<0)
    {
        echo" $Delta < 0 donc il existe aucune solution reelle (mais deux imaginaires)";
    }
    else if($Delta==0)
    {
        echo"$Delta ==0 donc il existe une solution reelle.$x0";
    }
    else if($Delta>0)
    {
        echo"$Delta >0 donc il existe deux solutions reelles.$x1,$x2";
    }
    ?>
</body>
</html>