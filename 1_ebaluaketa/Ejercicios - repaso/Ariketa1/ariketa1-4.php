<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 1 - 4</title>
</head>
<body>
    <h1>Ariketa 1 - 4</h1>
    <?php
    $kontua = rand(true, false);
    if ($kontua == true){
        echo "kontua desblokeatu da. " . $kontua;
    } elseif ($kontua == false) {
        echo "kontua blokeatu da. " . $kontua;
    }

    ?>
</body>
</html>