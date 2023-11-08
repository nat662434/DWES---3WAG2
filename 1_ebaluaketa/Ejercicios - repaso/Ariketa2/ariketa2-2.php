<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 2 - 2</title>
</head>
<body>
    <h1>Ariketa 2 - 2</h1>
    <?php
    $nota = rand(0.0, 10.0);
    $notaLetra = "";

    switch ($nota) {
        case ($nota < 5):
            $notaLetra = "gutxi";
            break;
        
        case ($nota < 6):
            $notaLetra = "nahiko";
            break;
        
        case ($nota < 7):
            $notaLetra = "ondo";
            break;

        case ($nota < 9):
            $notaLetra = "oso ondo";
            break;
    
        case ($nota < 10):
            $notaLetra = "bikain";
            break;
    }
    echo "Zure nota: " . $notaLetra;
    ?>
</body>
</html>