<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 1 - 5</title>
</head>
<body>
    <h1>Ariketa 1 - 5</h1>
    <?php
    $adina = rand(10, 30);
    $minAdina = 18;

    if ($adina < $minAdina){
        echo "Ez duzu baimena";
    } else {
        echo "Baimena duzu";
    }
    ?>
</body>
</html>