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
             $a=array(
               0 => 23,
               1 => 10,
               2 => 5,
               3 => 4,
               4 => 2,
               5 =>16,
             );
               for($i=0; $i< 5; $i++)
               {
                  echo '['.$a[$i]."]";
               }
$NbrCol = 6;
$tableau = array('23','10','5','4','2','16');

$NbreData = sizeof($tableau);

if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
   $NbrLigne = round(($NbreData/$NbrCol)+0.5);
} else {
   $NbrLigne = $NbreData/$NbrCol;
}

if ($NbreData != 0) {
$k = 0;
echo '<table border="1">';
for ($i=1; $i<=$NbrLigne; $i++) {
   for ($j=1; $j<=$NbrCol; $j++) {
      if ($k<$NbreData)
      {
         echo '<td>';
          
         echo $tableau[$k];
          
         echo '</td>';
         $k++;
      } 
   }
   echo '<tr>';
   $j=1;
}
echo '</table>';
} 
            ?>
    
    
</body>
</html>