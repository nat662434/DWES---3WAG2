<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1.3</title>
</head>
<body>
    <h1>Ariketa 1.3</h1>
    <?php
        $erosketaKop = rand(1,20);
        if ($erosketaKop > 10){
            echo "10 produktu baino gehiago dira. ";
        }
        echo "Produktu kopurua: ". $erosketaKop;
    ?>
</body>
</html>