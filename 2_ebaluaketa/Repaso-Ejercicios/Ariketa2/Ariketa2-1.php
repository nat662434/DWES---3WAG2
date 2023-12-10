<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 2.1</title>
</head>
<body>
    <h1>Ariketa 2.1</h1>
    <?php
        $data = Date("N");
        $eguna = "";
        if ($data == 1){
            $eguna = "Astelehena";
        } elseif ($data == 2){
            $eguna = "Asteartea";
        } elseif ($data == 3){
            $eguna = "Azteazkena";
        } elseif ($data == 4){
            $eguna = "Osteguna";
        } elseif ($data == 5){
            $eguna = "Ostirala";
        } elseif ($data == 6){
            $eguna = "Larunbata";
        } elseif ($data == 7){
            $eguna = "Igandea";
        }
    ?>
</body>
</html>