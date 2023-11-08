<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ariketa 3 - 2</title>
    </head>
    <body>
        <h1>Ariketa 3 - 2</h1>
        <?php
        $zbk = rand(1, 10);
        $gehiketa = 0;
        for ($i = 1; $i < 6; $i++){
            $gehiketa += $zbk;
            // echo $gehiketa;
        }
        echo "Gehiketa: " . $gehiketa;
        ?>
    </body>
</html>