<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1.2</title>
</head>
<body>
    <h1>Ariketa 1.2</h1>
    <?php
        $balioa = rand(1,20);
        if ($balioa < 10){
            echo $balioa . " 10 baino txikiagoa da";
        } elseif ($balioa = 10){
            echo "10 da";
        } else {
            echo $balioa . " 10 baino handiagoa da";
        }
    ?>
</body>
</html>