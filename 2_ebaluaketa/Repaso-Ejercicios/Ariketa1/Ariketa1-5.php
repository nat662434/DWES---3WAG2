<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1.5</title>
</head>
<body>
    <h1>Ariketa 1.5</h1>
    <?php
        $adina = rand(15, 25);
        if ($adina > 18){
            echo "Baimena daukazu";
        } else {
            echo "Ez duzu baimenik";
        }
    ?>
</body>
</html>