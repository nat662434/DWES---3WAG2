<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1.4</title>
</head>
<body>
    <h1>Ariketa 1.4</h1>
    <?php 
        $kontua = rand(true, false);
        if ($kontua == true){
            echo "Kontua desblokeatuta dago";
        } elseif ($kontua == false) {
            echo "Kontua blokeatuta dago";
        }
    ?>
</body>
</html>