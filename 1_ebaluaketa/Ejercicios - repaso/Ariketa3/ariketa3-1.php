<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ariketa 3 - 1</title>
    </head>
    <body>
        <h1>Ariketa 3 - 1</h1>
        <?php 
        $zbk = rand(0,30);
        $gehiketa = rand(0,30);
        $kont = 0;

        while ($kont < 10) {
            $gehiketa += $zbk;
            $kont++;
        }

        echo "Emaitza " . $gehiketa . " da";

        ?>
    </body>
</html>