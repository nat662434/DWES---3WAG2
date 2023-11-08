<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 1 - 2</title>
</head>
<body>
    <h1>Ariketa 1 - 2</h1>
    <?php
        $balioa = rand(0,30);
        if ($balioa < 10){
            echo "Balioa (" . $balioa . ") 10 baino txikiagoa da.";
        /*} elseif ($balioa = 10) {
            echo "Balioa " . $balioa . " da.";*/
        } else {
            echo "Balioa (" . $balioa . ") 10 baino handiagoa da.";
        }
    ?>
</body>
</html>