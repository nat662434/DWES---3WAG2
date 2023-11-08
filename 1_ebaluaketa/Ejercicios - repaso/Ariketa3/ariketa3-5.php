<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 3 - 5</title>
</head>
<body>
    <h1>Ariketa 3 - 5</h1>
    <?php
    $zbk = 0;
    for ($i=1; $i<100; $i++){
        for ($j=1; $j<=$i; $j++) { 
            if ($i % $j == 0){
                $zbk = $i;
                echo $zbk. "<br>";
                break;
            } else {
                //$zbk = $i;
                //echo $zbk. "<br>";
            }
            
        }//echo $zbk. "<br> sd";
        
    } //echo $zbk. "<br> sd";
    ?>
</body>
</html>