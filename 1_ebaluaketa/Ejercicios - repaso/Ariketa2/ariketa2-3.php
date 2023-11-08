<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 2 - 3</title>
</head>
<body>
    <h1>Ariketa 2 - 3</h1>
    <?php
    $zbk = rand(0, 30);
    $erantzuna = "";
    if ($zbk < 10){
        $erantzuna = "zenbakia 10 baino txikiagoa da";
    } elseif ($zbk < 20){
        $erantzuna = "zenbakia 20 baino txikiagoa da";
    } elseif ($zbk < 30){
        $erantzuna = "zenbakia 30 baino txikiagoa da";
    }

    echo $erantzuna;
    ?>
</body>
</html>